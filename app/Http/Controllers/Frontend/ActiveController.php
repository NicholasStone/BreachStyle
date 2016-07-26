<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActiveController extends Controller
{
    /**
     * 全国热度榜详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activeDetail()
    {

        return view('frontend.active');
    }

    /**
     * 首页热度榜
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexUniversityActive()
    {

        return response()->json([]);
    }

    /**
     * 省热度榜详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function provinceActive()
    {
        return view('frontend.universities');
    }
}
