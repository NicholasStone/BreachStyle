<?php

namespace App\Http\Controllers\Backend\Verification;

use App\Models\Application;
use App\Http\Controllers\Common\FileStorage;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\Datatables\Facades\Datatables;

class ApplicationController extends VerificationController
{
    use FileStorage;

    public function index()
    {
        return view('backend.verification.application.index')
            ->withUser(access()->user());
    }

    public function unhandled($v = 0)
    {
        return Datatables::of(Application::with('branch')
            ->select(['id', 'name', 'type', 'created_at', 'branch_id'])
            ->where('verification', $v)
            ->orderBy('created_at', 'desc')
            ->get()
        )
            ->addColumn('operations', function ($apply) {
                return '<a href="' . route('admin.verify.application.detail', $apply->id) . '" class="btn btn-xs btn-primary"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.detail') . '"></i></a> ';
            })
            ->make(true);
    }

    public function grant($id)
    {
        $apply = Application::find($id);
        $apply->verification = 1;
        $apply->save();

        return redirect()->back()->withFlashSuccess("操作成功");
    }

    public function deny($id)
    {
        $apply = Application::findOrFail($id);
        $apply->delete();

        return redirect()->route('admin.verify.application')->withFlashSuccess("操作成功");
    }

    public function detail($id)
    {
        $application = Application::find($id);
        $application->branch;

//        dd($application->toArray());
        return view('backend.verification.application.detail', $application);
    }

    public function excel()
    {
        Excel::create("提交记录-截止于" . Carbon::now('Asia/Shanghai'), function ($excel) {
            $excel->sheet('提交记录', function ($sheet) {
                $data = $this->getExcelData();
                $sheet->with($data);
            });
        })->download('xlsx');
    }

    /**
     * @return array
     */
    protected function getExcelData()
    {
        $application = Application::with("branch")->select([
            "id", "name", "type", "verification", "branch_type", "created_at", "branch_id", "updated_at", "detail", "summary",
        ])->get();

        $data = [];
        foreach ($application as $key => $item) {
            array_push($data, [
                '#'       => $item->id,
                '提交作品题目'  => $item->name,
                '提交作品类型'  => $item->type,
                '支部名称'    => $item->branch->name,
                '支部类型'    => $item->branch->type,
                '所属学校'    => $item->branch->university->name,
                '简介'      => $item->summary,
                '详情'      => $item->detail,
                '是否已通过审核' => $item->verification ? "是" : "否",
                '提交于'     => $item->created_at,
                '通过于'     => $item->verification ? $item->updated_at : "未审核",
            ]);
        }

        return $data;
    }
}
