<?php

namespace App\Http\Controllers\Backend\Verification;

use App\Models\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class ApplicationController extends VerificationController
{
    public function index()
    {
        return view('backend.verification.application.index');
    }

    public function getInfoNeedToVerified()
    {
        $info = Application::where('verification', 0)->orderBy('created_at', 'desc')->get();
        $user = $info->user;
        dd($info);
        return response()->json(compact("info", "user"));
    }

    public function passVerify($id)
    {
        $apply = Application::find($id)->first();
        $apply->verification = 1;
        $apply->save();

        return response()->json(['success' => true]);
    }

    public function lab($id){
        $apply = Application::find(1)->user;
        dd($apply);
    }
}
