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
        $branch->restore();

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
        $data     = [];
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

    public function search(Request $request)
    {
        return Datatables::of(
            $this->branch
                ->withStatus($request->get('status'))
                ->isHasName($request->get('branch_name'))
                ->isHasType($request->get('branch_type'))
                ->orderBy('created_at', 'asc')->get()
        )
            ->addColumn('operations', function ($branch) {
                return '<a href="' . route('admin.verify.branch.detail', $branch->id) . '" target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.detail') . '"></i></a> ';
            })
            ->make(true);
    }


}
