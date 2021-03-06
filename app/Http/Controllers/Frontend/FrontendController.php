<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Models\Settings\Setting;
use App\Models\Settings\Slider;
use App\Models\Application;
use App\Models\Branch;
use App\Models\Province;
use App\Models\University;
use App\Components\MapData;
use Dompdf\Image\Cache;
use Illuminate\Support\Facades\Redis;

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
        $sliders                          = Slider::all();
        $settings                         = Setting::all();
        $last_trends                      = Application::orderBy('created_at', 'desc')->where('verification', 1)->take(8)->get();
        $count_branches                   = Branch::where('verification', 1)->count();
        $count_universities               = University::has('branches')->count();
        $count_verify_through_application = Application::where('verification', 1)->count();
        $work_list                        = Application::where('type', '工作案例')->where('verification', 1)->orderBy('created_at', 'desc')->take(3)->get();
        $tiny_list                        = Application::where('type', '微党课')->where('verification', 1)->orderBy('created_at', 'desc')->take(4)->get();
        $teacher_list                     = Application::where('type', '教师党支部推荐展示')->where('verification', 1)->orderBy('created_at', 'desc')->take(4)->get();
        $student_list                     = Application::where('type', '学生党支部推荐展示')->where('verification', 1)->orderBy('created_at', 'desc')->take(4)->get();

//
        return view('frontend.index', compact('last_trends', 'count_branches', 'count_universities', 'count_verify_through_application', 'datas',
            'work_list', 'tiny_list', 'teacher_list', 'student_list', 'sliders', 'settings'));
    }
//
//    /**
//     * @return array
//     */
//    public function getMapData()
//    {
//        if (!$datas = Redis::get("MapData")) {
//            $datas = MapData::getMapData();
//            Redis::setex("MapData", "6000", \GuzzleHttp\json_encode($datas));
//        }
//
//        return response($datas);
//    }
//
//    /**
//     * @param $id
//     * @return mixed
//     */
//    public function getProvinceDetail($id)
//    {
//        $universities = Province::find($id)->universities()->has('branches')->take(6)->get();
//        foreach ($universities as $university) {
//            $branch_application_count = 0;
//            foreach ($university->branches as $branch) {
//                $branch_application_count += $branch->applications->count();
//            }
//            $university_application_list[] = $branch_application_count;
//        }
//
//        return response()->json([
//            'universities'                => $universities,
//            'university_application_list' => $university_application_list,
//        ]);
//    }
//
//    public function getProvinceSummary($id, Province $province)
//    {
//        if (!$summary = Redis::get("province_summary_" . $id)) {
//            list(
//                $count_student_branch,
//                $count_teacher_branch,
//                $count_application,
//                $count_user,
//                $count_university
//                ) = $this->Count($id, $province);
//
//            $summary = [
//                'count_user'           => $count_user,
//                'count_application'    => $count_application,
//                'count_student_branch' => $count_student_branch,
//                'count_teacher_branch' => $count_teacher_branch,
//                'count_university'     => $count_university,
//            ];
//
//            Redis::setex("province_summary_" . $id, '3600', \GuzzleHttp\json_encode($summary));
//        }
//
//        return response($summary);
//    }

    public function universityList($id, Province $province)
    {
        $province                      = $province->where("id", $id)->with(["universities" => function ($query) {
            $query->has("branches");
        }])->get()[0];
//        $count_branch                  = 0;
//        $count_application             = 0;
//        $count_universities_has_branch = 0;
//        $count_university              = University::where("province_id", $id)->count();
        foreach ($province->universities as $university) {
//            branches count
            $branches = $university->branches()->withStatus()->count();

//            $count_branch += $branches;

            $university->hasBranches = $branches;

//            if ($branches != 0) {
//                $count_universities_has_branch++;
//            }
//            application count
//            foreach ($university->branches as $branch) {
//                $count_application += $branch->applications()->where('verification', 1)->count();
//            }
        }
        $universities = $province->universities;

//        return view('frontend.universities', compact("count_application", "count_branch", "count_university", "universities", "count_universities_has_branch", "province"));
        return view('frontend.universities', compact("universities", "province"));
    }

//    /**
//     * @param $id
//     * @param Province $province
//     * @return array
//     */
//    protected function Count($id, Province $province)
//    {
//
//
//        return [$count_student_branch, $count_teacher_branch, $count_application, $count_user, $count_university, $count_universities_has_branch];
//    }
}
