<?php

namespace App\Http\Controllers\Backend\Verification;

use App\Models\Branch;
use Yajra\Datatables\Datatables;

class BranchController extends VerificationController
{
    public function index()
    {
        return view("backend.verification.branch.index")
            ->withUser(access()->user());
    }

    public function unhandled()
    {
        return Datatables::of(
            Branch::with('secretary')
                ->where('verification', 0)
                ->orderBy('created_at', 'asc')
                ->get())
            ->addColumn('operations', function ($branch) {
                return '<a href="' . route('admin.verify.branch.detail', $branch->id) . '" class="btn btn-xs btn-primary"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.detail') . '"></i></a> ';
            })
            ->make(true);
    }

    public function grant($id)
    {
        $branch = Branch::findOrFail($id);
        $branch->verification = 1;
        $branch->save();
        alert()->success("操作成功");

        return redirect()->route('admin.verify.branch');
    }

    public function detail($id)
    {
        $branch = Branch::with('secretary')->where('id', $id)->firstOrFail();
        $branch->sercetary;
//        dd($branch->toArray());
        return view('backend.verification.branch.detail', $branch);
    }

    public function deny($id)
    {
        $branch = Branch::findOrFail($id);
        $application = $branch->application;
        if ($application->count()) {
            $application->delete();
        }
        $members = $branch->members;
        $members->each(function ($member){
            $member->branch_name = null;
            $member->save();
        });
        $branch->delete();

        return redirect()->route('admin.verify.branch');
    }
}
