<?php

namespace App\Http\Controllers\Backend\Verification;

use App\Http\Controllers\Controller;

abstract class VerificationController extends Controller
{
    public abstract function index();

    public abstract function gets($v = 0);

    public abstract function grant($id);

    public abstract function deny($id);

    public abstract function detail($id);

    public abstract function delete($id);

    public abstract function excel();
}
