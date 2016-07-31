<?php

namespace App\Http\Controllers\Frontend;

use App\Components\MapData;
use App\Models\Access\User\User;
use App\Models\Application;
use App\Models\Branch;
use App\Models\University;
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
        $all_count_user = User::where('user_id', '!=', '')->count();
        $all_count_application = Application::all()->count();
        $all_count_student_branch = Branch::where('type', '学生党支部')->count();
        $all_count_teacher_branch = Branch::where('type', '教师党支部')->count();
        $all_count_throughed_university = University::has('branches')->count();
        
        $datas = MapData::getMapData();

        return view('frontend.active', compact('all_count_user', 'all_count_application',
            'all_count_student_branch', 'all_count_teacher_branch', 'all_count_throughed_university','datas'));
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
