<?php

namespace App\Http\Controllers\Backend\Verification;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Branch;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\Datatables\Datatables;

class BranchController extends VerificationController
{
    public function index()
    {
        return view("backend.verification.branch.index")
            ->withUser(access()->user());
    }

    public function gets($v = 0)
    {
        return Datatables::of(
            Branch::where('verification', $v)
                ->orderBy('created_at', 'asc')
                ->get())
            ->addColumn('operations', function ($branch) {
                return '<a href="' . route('admin.verify.branch.detail', $branch->id) . '" class="btn btn-xs btn-primary"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.detail') . '"></i></a> ';
            })
            ->make(true);
    }

    public function restore($id)
    {
        // TODO: Implement restore() method.
    }

    public function grant($id)
    {
        $branch = Branch::findOrFail($id);
        $branch->verification = 1;
        $branch->save();

        return redirect()->route('admin.verify.branch');
    }

    public function detail($id)
    {
        $branch = Branch::where('id', $id)->firstOrFail();
        $branch->sercetary;

//        dd($branch->toArray());
        return view('backend.verification.branch.detail', $branch);
    }

    public function deny(Request $request, $id)
    {
        $branch = Branch::findOrFail($id);
        $application = $branch->application;
        if ($application->count()) {
            $application->each(function ($item){
                $item->delete();
            });
        }
        $members = $branch->members;
        $members->each(function ($member) {
            $member->branch_id = null;
            $member->save();
        });
        $branch->delete();

        return redirect()->route('admin.verify.branch');
    }

    public function delete(Request $request, $id)
    {
        // TODO: Implement delete() method.
    }

    public function excel()
    {
        Excel::create("支部数据-截止于" . Carbon::now('Asia/Shanghai'), function ($excel) {
            $excel->sheet("支部数据", function ($sheet) {
                $sheet->with($this->getExcelData());
            });
        })->download('xlsx');
    }

    protected function getExcelData()
    {
        $branches = Branch::select([
            'id', 'name', 'type', 'university', 'tel', 'verification', 'address', 'summary',
            'total_membership', 'secretary_summary', 'secretary', 'created_at', 'updated_at',
        ])->get();
        $data = [];
        foreach ($branches as $item) {
            array_push($data, [
                "#"       => $item->id,
                "支部名称"    => $item->name,
                "支部类型"    => $item->type,
                "支部联系电话"  => $item->tel,
                "支部通讯地址"  => $item->address,
                "简介"      => $item->summary,
                "总人数"     => $item->total_membership,
                "支部书记"    => $item->secretary->name,
                "支部书记简介"  => $item->secretary_summary,
                "所在学校"    => $item->university->name,
                '是否已通过审核' => $item->verification ? "是" : "否",
                '提交于'     => $item->created_at,
                '通过于'     => $item->verification ? $item->updated_at : "未审核",
            ]);
        }

        return $data;
    }
}
