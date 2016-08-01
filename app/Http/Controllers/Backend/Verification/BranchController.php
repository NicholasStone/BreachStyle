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

    public function unhandled($v = 0)
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

    public function deny($id)
    {
        $branch = Branch::findOrFail($id);
        $application = $branch->application;
        if ($application->count()) {
            $application->delete();
        }
        $members = $branch->members;
        $members->each(function ($member){
            $member->branch_id = null;
            $member->save();
        });
        $branch->delete();

        return redirect()->route('admin.verify.branch');
    }
}
