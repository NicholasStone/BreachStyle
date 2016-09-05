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

class CourseController extends Controller
{
    use FileStorage;

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
        $page = Application::with('branch')->where('type', $type)->where('verification', 1)->orderBy($sort, "desc")->paginate();

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
            'name'            => 'required|unique',
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

        $application = new Application();
        $apply = $request->all();
        $img_hash = $this->saveImage($request->file('img'), "Application/Course");
        $apply_hash = $this->saveImage($request->file('apply'), "Application/Apply");
        $application->name = $apply['name'];
        $application->type = '微党课';
        $application->detail = $apply['summary'];
        $application->branch_id = Auth::user()->branch_id;
        $application->branch_type = Auth::user()->branch_type;
        $application->course_lecturer = $apply['course_lecturer'];
        $application->img_hash = $img_hash;
        $application->apply_hash = $apply_hash;
        $application->video_hash = \Session::get('video_path');
        $application->save();

        alert()->success('提交成功，请等待审核');

        return redirect()->route('frontend.index');
    }

    /**
     * 上传视频文件
     * @param Request $request
     * @return mixed
     */
    public function upload(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json([
                'jsonrpc' => '2.0',
                'error'   => [
                    'code'    => 103,
                    'message' => '无法接收上传文件',
                ],
                'id'      => 'id',
            ]);
        }
        $path = $this->saveVideo($request->file('file'));
        \Session::set('video_path', $path);

        return response()->json([
            'jsonrpc' => '2.0',
            'result'  => null,
            'id'      => 'id',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::find($id);
        $comments = $application->comments;
        $branch = $application->branch;
        $university = $branch->university;

        return view('frontend.party.course.detail', compact('application', 'comments', 'branch', 'university'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
