<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Branch;
use App\Models\Province;
use App\Models\University;
use App\Components\MapData;
use Illuminate\Support\Facades\App;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        javascript()->put([
            'test' => 'it works!',
        ]);
        $last_trends = Application::orderBy('created_at', 'desc')->where('verification', 1)->take(8)->get();
        $count_branches = Branch::all()->count();
        $count_universities = University::has('branches')->count();
        $count_verify_through_application = Application::where('verification', 1)->count();
        $work_list = Application::where('type', '工作案例')->take(3)->get();
        $tiny_list = Application::where('type', '微党课')->take(4)->get();
        $teacher_list = Application::where('type', '教师党支部推荐展示')->take(4)->get();
        $student_list = Application::where('type', '学生党支部推荐展示')->take(4)->get();
        return view('frontend.index', compact('last_trends', 'count_branches', 'count_universities', 'count_verify_through_application', 'datas',
            'work_list', 'tiny_list', 'teacher_list', 'student_list'));
    }

    /**
     * @return array
     */
    public function getMapData()
    {
        $datas = MapData::getMapData();
        return $datas;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getProvinceDetail($id)
    {
        $universities = Province::find($id)->universities()->has('branches')->take(6)->get();
        foreach ($universities as $university) {
            $branch_application_count = 0;
            foreach ($university->branches as $branch) {
                $branch_application_count += $branch->applications->count();
            }
            $university_application_list[] = $branch_application_count;
        }
        return response()->json([
            'universities' => $universities,
            'university_application_list' => $university_application_list
        ]);
    }

    public function getProvinceSummary($id)
    {
        $province = Province::find($id);
        $count_student_branch = 0;
        $count_teacher_branch = 0;
        $count_application = 0;
        $count_user = 0;
        $count_university = Province::find($id)->universities->count();
        foreach ($province->universities as $university) {
            $count_student_branch += $university->branches()->where('type', '学生党支部')->count();
            $count_teacher_branch += $university->branches()->where('type', '教师党支部')->count();
            foreach ($university->branches as $branch) {
                $count_application += $branch->applications()->where('verification', 1)->count();
                $count_user += $branch->members->count();
            }
        }
        return response()->json([
            'count_user' => $count_user,
            'count_application' => $count_application,
            'count_student_branch' => $count_student_branch,
            'count_teacher_branch' => $count_teacher_branch,
            'count_university' => $count_university
        ]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
