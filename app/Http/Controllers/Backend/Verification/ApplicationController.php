<?php

namespace App\Http\Controllers\Backend\Verification;

use App\Models\Application;
use App\Http\Controllers\Common\FileStorage;
use Yajra\Datatables\Facades\Datatables;

class ApplicationController extends VerificationController
{
    use FileStorage;

    public function index()
    {
        return view('backend.verification.application.index')
            ->withUser(access()->user());
    }

    public function unhandled()
    {
        return Datatables::of(Application::with('branch')
            ->select(['id', 'name', 'type', 'created_at'])
            ->where('verification', 0)
            ->orderBy('created_at', 'desc')
            ->get()
        )
            ->addColumn('operations', function($apply){
                return '<a href="' . route('admin.verify.application.detail', $apply->id) . '" class="btn btn-xs btn-primary"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.detail') . '"></i></a> ';
            })
            ->make(true);
    }

    public function grant($id)
    {
        $apply = Application::find($id)->first();
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
        return view('backend.verification.application.detail', $application);
    }
}
