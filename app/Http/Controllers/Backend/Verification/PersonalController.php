<?php

namespace App\Http\Controllers\Backend\Verification;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Yajra\Datatables\Datatables;

class PersonalController extends VerificationController
{
    //
    public function index()
    {
        return view('backend.verification.personal.index')
            ->withUser(access()->user());
    }

    public function unhandled()
    {
        return Datatables::of(Application::where('verification', 0)->orderBy('created_at', 'desc')->get())->make(true);

    }

    public function grant($id)
    {
        $application = Application::find($id)->first();
        $application->verification = 1;
        $application->save();
    }

    public function deny($id)
    {
        $application = Application::find($id)->first();
        $application->verification = -1;
        $application->save();
    }

    public function detail($id)
    {

    }
}
