<?php

namespace App\Http\Controllers\Frontend\Party;

use Validator;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Common\FileStorage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\Party\Traits\ApplicationTrait;

class RecommendController extends Controller
{
    use ApplicationTrait;
    use FileStorage;

    /**
     * Display a listing of the resource.
     * @param $type
     * @param string $sort
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     */
    public function index($type, $sort = 'created_at')
    {
        if ($type == 'student') {
            $type = '学生党支部推荐展示';
        } else if ($type == 'instructor') {
            $type = '教师党支部推荐展示';
        } else {
            return redirect()->back();
        }
        $page = $this->getIndexPage($type, $sort);

        return view('frontend.party.common.list', compact('type', 'page', 'sort'))->withUser(access()->user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.party.recommend.create')->withUser(access()->user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'    => 'required',
            'summary' => 'required|max:300',
            'apply'   => 'required',
            'img'     => 'required',
            'detail'  => 'required',
        ]);
//        dd($validate);
        if ($validate->fails()) {
            alert()->error("请完整填写所有字段！");

            return redirect()->back();
        }
        $application              = new Application();
        $apply                    = $request->all();
        $img_hash                 = $this->saveImage($request->file('img'), "Application/Recommend");
        $apply_hash               = $this->saveImage($request->file('apply'), "Application/Apply");
        $application->name        = $apply['name'];
        $application->type        = Auth::user()->branch_type == '学生党支部' ? '学生党支部推荐展示' : '教师党支部推荐展示';
        $application->detail      = $apply['detail'];
        $application->summary     = $apply['summary'];
        $application->branch_id   = Auth::user()->branch_id;
        $application->branch_type = Auth::user()->branch_type;
        $application->img_hash    = $img_hash;
        $application->apply_hash  = $apply_hash;
        $application->video_hash  = \Session::has('video_path') ? \Session::get('video_path') : "";
        \Session::set('video_path', null);
        $application->save();

        alert()->success('提交成功，请等待审核');

        return redirect()->route('frontend.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $application = Application::with(['branch.university.province'])->where("id", $id)->firstOrFail();
//        $comments    = $application->comments;
//        $branch      = $application->branch;
//        $university  = $branch->university;

        return view('frontend.party.recommend.detail', $this->getShowData($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $application = Application::findOrFail($id);
//
//        if ($application->verification != -1) {
//            alert()->error("您现在不能修改成功信息");
//
//            return redirect()->back();
//        }
//
//        return view('frontend.party.recommend.edit', $application);

        return $this->editOrFail('frontend.party.recommend.edit', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $application = Application::findOrFail($id);
        $apply       = $request->all();
//        if ($request->file('img')) {
//            $img_hash              = $this->saveImage($request->file('img'), "Application/Course");
//            $application->img_hash = $img_hash;
//        }
//        if ($request->file('apply')) {
//            $apply_hash              = $this->saveImage($request->file('apply'), "Application/Apply");
//            $application->apply_hash = $apply_hash;
//        }
        $application = $this->updateApplication($request, $application);

//        if (\Session::has('video_path')) {
//            $application->video_hash = \Session::get('video_path');
//            \Session::set('video_path', null);
//        }
//        $application->name         = $apply['name'];
//        $application->summary      = $apply['summary'];
        $application->detail       = $apply['detail'];
        $application->verification = 0;
        $application->save();

        alert()->success('提交成功，请等待审核');

        return redirect()->route('frontend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
