<?php

namespace App\Http\Controllers\Backend\Verification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class VerificationController extends Controller
{
    public abstract function index();

    public abstract function gets($v = 0);

    public abstract function grant($id);

    public abstract function deny(Request $request, $id);

    public abstract function detail($id);

    public abstract function delete(Request $request, $id);

    public abstract function excel();
}
