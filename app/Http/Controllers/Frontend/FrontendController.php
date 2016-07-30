<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Branch;
use App\Models\Province;
use App\Models\University;
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
        $provinces = Province::all();
        foreach ($provinces as $province) {
            $province_through_university = $province->universities()->has('branches')->count();
            $province_university = $province->universities()->count();
            if ($province_university !== 0) {
                $decimal = round($province_through_university / $province_university, 4) * 100;
                $rate = $decimal . '%';
            } else {
                $decimal = '0';
                $rate = $decimal . '%';
            }
            if ($decimal >= '80') {
                $color = '0';
            } elseif ($decimal >= '60' && $decimal < '80') {
                $color = '1';
            } elseif ($decimal >= '40' && $decimal < '60') {
                $color = '2';
            } elseif ($decimal >= '20' && $decimal < '40') {
                $color = '3';
            } elseif ($decimal < '20') {
                $color = '5';
            }
            $datas[] = [
                'id' => $province->id,
                'rate' => $rate,
                'color' => $color
            ];
        }
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

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
