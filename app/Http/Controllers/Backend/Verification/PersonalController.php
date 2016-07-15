<?php

namespace App\Http\Controllers\Backend\Verification;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class PersonalController extends VerificationController
{
    //
    public function index()
    {
        return view('backend.verification.personal.index');
    }

    public function getInfoNeedToVerified()
    {
        $info = Application::where('verification', 0)->orderBy('created_at', 'desc')->get();
        return response()->json($info);
    }

    public function passVerify($id)
    {
        $application = Application::find($id)->first();
        $application->verification = 1;
        $application->save();
    }
}
