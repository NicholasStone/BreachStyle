<?php

namespace App\Http\Controllers\Backend\Verification;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Http\Controllers\Common\FileStorage;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\Datatables\Facades\Datatables;

class ApplicationController extends VerificationController
{
    use FileStorage;

    protected $application;

    /**
     * ApplicationController constructor.
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * 显示审核列表
     *
     * @return mixed
     */
    public function index()
    {
        return view('backend.verification.application.index')
            ->withUser(access()->user());
    }

    public function restore($id)
    {
        $apply = Application::onlyTrashed()->where('id', $id)->firstOrFail();
        $apply->restore();

        return redirect()->back()->withFlashSuccess("恢复成功");

    }

    public function delete(Request $request, $id)
    {
        $apply = Application::findOrFail($id);
        $apply->softDelete($request->get('reason'));

        return redirect()->route('admin.verify.application')->withFlashSuccess("操作成功");
    }

    public function grant($id)
    {
        $apply = Application::findOrFail($id);
        $apply->grant();

        return redirect()->back()->withFlashSuccess("操作成功");
    }

    public function deny(Request $request, $id)
    {
        $apply = Application::findOrFail($id);
        $apply->deny($request->get('reason'));

        return redirect()->back()->withFlashSuccess("操作成功");
    }

    public function detail($id)
    {
        $application = $this->application
            ->withTrashed()->where('id', $id)
            ->with([
                'branch'       => function ($query) {
                    $query->select(['id', 'name', 'tel', 'university']);
                },
                'notification' => function ($query) {
                    $query->select(['id', 'extra']);
                },
            ])
            ->firstOrFail();

        return view('backend.verification.application.detail', compact("application"));
    }

    public function excel()
    {
        Excel::create("提交记录-截止于" . Carbon::now('Asia/Shanghai'), function ($excel) {
            $excel->sheet('提交记录', function ($sheet) {
                $data = $this->getExcelData();
                $sheet->loadView('backend.inner.excel')->with(['data' => $data]);
            });
        })->download('xlsx');
    }

    /**
     * @return array
     */
    protected function getExcelData()
    {
        $application = Application::with(["branch" => function ($query) {
            $query
                ->select(['id', 'name', 'secretary', 'tel', 'university', 'type'])
                ->with(['secretary' => function ($query) {
                    $query->select(['id', 'name'])->withTrashed();
                }])
                ->withTrashed();
        }])->select([
            "id", "name", "type", "verification", "branch_type", "created_at", "branch_id", "updated_at", "summary", "deleted_at",
        ])
            ->withTrashed()
            ->get();
        $data = [];
        foreach ($application as $key => $item) {
            array_push($data, [
                'id'           => $item->id,
                'name'         => $item->name,
                'type'         => $item->type,
                'branch-name'  => $item->branch->name,
                'secretary'    => $item->branch['relations']['secretary']['original']['name'],
                'tel-work'     => $item->branch->tel,
                'branch-type'  => $item->branch->type,
                'school'       => $item->branch->university,
                'summary'      => $item->summary,
                'verification' => $item->deleted_at ? "删除于" . $item->deleted_at : $item->verification ? "是" : "否",
                'status'       => $item->getStatus(),
                'post-at'      => $item->created_at,
                'pass-at'      => $item->verification ? $item->updated_at : "未审核",
                'url'          => $item->deleted_at ? "已删除" : $item->getShowUrl(),
            ]);
        }
        return $data;
    }

    /**
     * 用于管理员检索申请表
     * @param Request $request
     * @return
     * @internal param $application_name
     * @internal param $university_name
     * @internal param $branch_name
     * @internal param int $v
     */
    public function search(Request $request)
    {
        return Datatables::of(
            $this->application
                ->withStatus($request->get('status'))
                ->whereName($request->get('application_name'))
                ->select(['id', 'name', 'type', 'created_at', 'branch_id', 'verification', 'deleted_at'])
                ->whereHas('branch', function ($query) use ($request) {
                    if ($request->get('branch_name')) {
                        $query->where('name', 'like', '%' . $request->get('branch_name') . '%');
                    }
                    if ($request->get('university_name')) {
                        $query->where('university', 'like', '%' . $request->get('university_name') . '%');
                    }
                })
                ->with(['branch' => function ($query) {
                    $query->select(['id', 'name', 'university']);
                }])
                ->orderBy('created_at', 'desc')
                ->get()
        )
            ->addColumn('verify', function ($apply) {
                return $this->getVerificationLabel($apply);
            })
            ->addColumn('operations', function ($apply) {
                return '<a href="' . route('admin.verify.application.detail', $apply->id) . '" target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.detail') . '"></i></a> ';
            })
            ->make(true);
    }

}
