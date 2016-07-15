<?php

namespace App\Http\Controllers\Backend\Verification;

use App\Models\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

abstract class VerificationController extends Controller
{
    public abstract function index();

    public abstract function getInfoNeedToVerified();

    public abstract function passVerify($id);
}
