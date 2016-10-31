<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\Settings\Slider;
use App\Models\Settings\Setting;
use App\Http\Controllers\Controller;

class MobileController extends Controller
{
    protected $applications;

    public function __construct(Application $application)
    {
        $this->applications = $application;
    }

    public function applications()
    {
        $sliders        = Slider::all();
        $sliders_switch = Setting::find(5);
        $type = null;
        return view("frontend.mobile.list", compact("sliders", "sliders_switch", "type"));
    }

    public function applicationsList(Request $request)
    {
        dd($request);
    }

    public function branches()
    {

    }

    public function branchesList(Request $request)
    {

    }

    protected function listData($type = null)
    {
        $applications = $this->applications
            ->select(['id', 'name', 'type', 'branch_id', 'fancy', 'img_hash']);
        if (!empty($type)) {
            $applications->where('type', $type);
        }
        $applications
            ->withStatus()
            ->with(['branch' => function ($query) {
                $query->select(['id', 'name']);
            }, 'comments'    => function ($query) {
                $query->select(['id']);
            }])
            ->limit(7)
            ->orderBy('updated_at', 'desc')
            ->get();

        return compact("applications");
    }
}