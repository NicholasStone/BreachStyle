<?php

namespace App\Http\Controllers\Backend\Verification;

use App\Models\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

abstract class VerificationController extends Controller
{
    public abstract function index();

    public abstract function unhandled();

    public abstract function grant($id);

    public abstract function deny($id);

    public abstract function detail($id);
}
