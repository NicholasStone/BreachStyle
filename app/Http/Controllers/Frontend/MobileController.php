<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\Settings\Slider;
use App\Models\Settings\Setting;
use App\Http\Controllers\Controller;

class MobileController extends Controller
{
    protected $ITEM_EACH_PAGE = 7;

    public function applications()
    {
        $sliders        = Slider::all();
        $sliders_switch = Setting::find(5);
        $type           = null;

        return view("frontend.mobile.list", compact("sliders", "sliders_switch", "type"));
    }

    public function applicationsList(Application $applications, Request $request)
    {
        $offset       = $request->get('counter') * $this->ITEM_EACH_PAGE;
        $applications = $applications->select(['id', 'name', 'type', 'branch_id', 'fancy', 'img_hash', 'total_comment'])
            ->orderBy('updated_at', 'asc')->withStatus()
            ->with(['branch' => function ($query) {
                $query->select(['id', 'name']);
            }]);
        if ($request->type) {
            $applications = $applications->where('type', $request->type);
        }
        if ($offset != 0) {
            $applications = $applications->skip($offset)
                ->take($this->ITEM_EACH_PAGE);
        }else{
            $applications = $applications->limit($this->ITEM_EACH_PAGE);
        }
        $lists = $applications->get();

        foreach ($lists as $item) {
            $item->url         = $this->getApplicationUrl($item);
            $item->branch->url = $this->getBranchUrl($item->branch);
        }

        return response()->json(compact("lists"));
    }

    public function branches()
    {

    }

    public function branchesList(Request $request)
    {

    }

    protected function getApplicationUrl($application)
    {
        $url = '';
        switch ($application->type) {
            case "工作案例":
                $url = route('frontend.case.show', $application->id);
                break;
            case "微党课":
                $url = route('frontend.course.show', $application->id);
                break;
            case "教师党支部推荐展示":
            case "学生党支部推荐展示":
                $url = route('frontend.recommend.show', $application->id);
                break;
        }

        return $url;
    }

    protected function getBranchUrl($branch)
    {
        return route('frontend.m.branch.show', $branch->id);
    }
}