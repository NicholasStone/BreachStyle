<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Http\Controllers\Common\FileStorage;
use App\Http\Requests\Frontend\Party\CourseRequest;
use App\Models\Application;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Validator;
use App\Http\Controllers\Frontend\Party\Traits\ApplicationTrait;

class CourseController extends Controller
{
    use FileStorage, ApplicationTrait;

    /**
     * Display a listing of the resource.
     *
     * @param string $sort
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     */
    public function index($sort = 'created_at')
    {
        $type = "微党课";
        $page = $this->getIndexPage($type, $sort);

        return view("frontend.party.common.list", compact('type', 'page', "sort"))
            ->withUser(access()->user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("frontend.party.course.create")
            ->withUser(access()->user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'            => 'required|unique:applications,name',
            'summary'         => 'required|max:200',
            'course_lecturer' => 'required|max:20',
            'apply'           => 'required',
            'img'             => 'required',
        ]);
//        dd($validate);
        if ($validate->fails()) {
            alert()->error("请完整填写所有字段！");

            return redirect()->back();
        }
        if (!\Session::has('video_path')) {
            alert()->error('请先上传视频');

            return redirect()->back();
        }

        $application                  = new Application();
        $apply                        = $request->all();
        $img_hash                     = $this->saveImage($request->file('img'), "Application/Course");
        $apply_hash                   = $this->saveImage($request->file('apply'), "Application/Apply");
        $application->name            = $apply['name'];
        $application->type            = '微党课';
        $application->summary         = $apply['summary'];
        $application->detail          = isset($apply['detail']) ? $apply['detail'] : $apply['summary'];
        $application->branch_id       = Auth::user()->branch_id;
        $application->branch_type     = Auth::user()->branch_type;
        $application->course_lecturer = $apply['course_lecturer'];
        $application->img_hash        = $img_hash;
        $application->apply_hash      = $apply_hash;
        $application->video_hash      = \Session::get('video_path');
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
//        $application = Application::findOrFail($id);
//        $comments = $application->comments;
//        $branch = $application->branch;
//        $university = $branch->university;

        return view('frontend.party.course.detail', $this->getShowData($id));
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
//        if ($application->canEdit()) {
//            alert()->error("您现在不能修改提交信息");
//
//            return redirect()->back();
//        }
//
//        return view('frontend.party.course.edit', $application);
        return $this->editOrFail('frontend.party.course.edit', $id);
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

        $apply = $request->all();
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
//        $application->name            = $apply['name'];
//        $application->summary         = $apply['summary'];
        $application->detail          = isset($apply['detail']) ? $apply['detail'] : $apply['summary'];
        $application->course_lecturer = $apply['course_lecturer'];;
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
