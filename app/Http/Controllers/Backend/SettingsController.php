<?php

namespace App\Http\Controllers\Backend;

use App\Model\Settings\Setting;
use App\Model\Settings\Slider;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $settings = Setting::all();

        return view('backend.settings')->with(compact("settings", "slider"));
    }

    public function update(Request $request)
    {

    }
}
