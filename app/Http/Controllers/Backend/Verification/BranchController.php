<?php

namespace App\Http\Controllers\Backend\Verification;

use Alpha\B;
use App\Models\Access\User\User;
use Fenos\Notifynder\Facades\Notifynder;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Branch;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\Datatables\Datatables;

class BranchController extends VerificationController
{

    protected $branch;

    /**
     * BranchController constructor.
     * @param $branch
     */
    public function __construct(Branch $branch)
    {
        $this->branch = $branch;
    }

    public function index()
    {
        return view("backend.verification.branch.index")
            ->withUser(access()->user());
    }

    public function restore($id)
    {
        $branch = Branch::onlyTrashed()->where('id', $id)->firstOrFail();
        if (!$branch->restore()) {
            return redirect()->back()->withErrors('此支部支部书记已不存在，无法恢复');
        };

        return redirect()->back()->withFlashSuccess("恢复成功");
    }

    public function grant($id)
    {
        $branch = Branch::findOrFail($id);
        $branch->grant();

        return redirect()->back()->withFlashSuccess('操作成功');
    }

    public function detail($id)
    {
        return view('backend.verification.branch.detail', $this->branch
            ->withTrashed()
            ->where('id', $id)
            ->withSecretaryName()
            ->firstOrFail()
        );
    }

    public function deny(Request $request, $id)
    {
        $branch = Branch::findOrFail($id);
        $branch->deny($request->get('reason'));

        return redirect()->back()->withFlashSuccess("操作成功");
    }

    public function delete(Request $request, $id)
    {
        $branch = Branch::findOrFail($id);
        $branch->softDelete($request->get('reason'));

        return redirect()->back();
    }

    public function excel()
    {
        Excel::create("支部数据-截止于" . Carbon::now('Asia/Shanghai'), function ($excel) {
            $excel->sheet("支部数据", function ($sheet) {
                $data = $this->getExcelData();
                $sheet->loadView('backend.inner.excel-branch')->with(['data' => $data]);
            });
        })->download('xlsx');
    }

    protected function getExcelData()
    {
        $branches = Branch::with(['secretary' => function ($query) {
            $query->select(['name', 'id']);
        }])->select([
            'id',
            'name',
            'type',
            'university',
            'tel',
            'verification',
            'address',
            'summary',
            'total_membership',
            'secretary',
            'created_at',
            'updated_at',
            'deleted_at',
        ])
            ->withTrashed();
        $branches = $branches->get();
//        dd($branches->toArray());
        $data = [];
        foreach ($branches as $item) {
            array_push($data, [
                "id"                => $item->id,
                "name"              => $item->name,
                "type"              => $item->type,
                "tel"               => $item->tel,
                "address"           => $item->address,
                "summary"           => $item->summary,
                "total"             => $item->total_membership,
                "secretary"         => empty($item->secretary) ? $item->secretary->name : '',
                "secretary-summary" => $item->secretary_summary,
                "school"            => $item->university,
                "verification"      => $item->verification ? "是" : "否",
                "status"            => $item->getStatus(),
                "post-at"           => $item->created_at,
                "pass-at"           => $item->verification ? $item->updated_at : "未审核",
                "url"               => route('frontend.branch.show', $item->id),
                'v'                 => $item->deleted_at ? false : $item->verification == 1 ? true : false,
            ]);
        }

        return $data;
    }

    public function search(Request $request)
    {
        return Datatables::of(
            $this->branch
                ->withStatus($request->get('status'))
                ->isHasName($request->get('branch_name'))
                ->isHasType($request->get('branch_type'))
                ->orderBy('created_at', 'desc')->get()
        )
            ->addColumn('verify', function ($branch) {
                return $this->getVerificationLabel($branch);
            })
            ->addColumn('operations', function ($branch) {
                return '<a href="' . route('admin.verify.branch.detail', $branch->id) . '" target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.detail') . '"></i></a> ';
            })
            ->make(true);
    }


}
