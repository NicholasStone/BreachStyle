<?php

namespace App\Http\Controllers\Backend\Verification;

use App\Models\Branch;
use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Datatables;

class BranchController extends VerificationController
{
    //
    public function index()
    {
        return view("backend.verification.branch.index")
            ->withUser(access()->user());
    }

    public function unhandled()
    {
        return Datatables::of(Branch::where('verification', 0)->get())->make(true);
    }

    public function grant($id)
    {
        $branch = Branch::find($id)->first();
        $branch->verification = 1;
        $branch->save();

        return response()->json(["success" => true]);
    }

    public function detail($id)
    {
        // TODO: Implement detail() method.
    }

    public function deny($id)
    {
        $branch = Branch::find($id)->first();
        $branch->verification = -1;
        $branch->save();

        return response()->json(["success" => true]);
    }
}
