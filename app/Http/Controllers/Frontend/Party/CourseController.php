<?php

namespace App\Http\Controllers\Frontend\Party;

use Auth;
use Cache;
use Validator;
use Carbon\Carbon;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Common\FileStorage;
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

    public function index_m()
    {
        return view("frontend.mobile.list", $this->getIndexData_m("微党课"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        alert()->info('由于我们正在对视频服务进行升级，所以您暂时无法上传微党课。请您随时关注此功能的动向，对于给您造成的不便我们深表歉意。希望您能理解，谢谢合作。')->persistent('关闭');
//        return redirect()->back();
        list($strDataID, $strKey) = $this->generateVideoToken();

        return view("frontend.party.course.create", compact("strDataID", "strKey"))
            ->withUser(access()->user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response|Mixed
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'            => 'required',
            'summary'         => 'required|max:370',
            'course_lecturer' => 'required|max:20',
            'apply'           => 'required|max:512',
            'img'             => 'required|max:512',
            'strDataID'       => 'required',
            'strKey'          => 'required',
        ], [
            'summary.max'        => '简介请不要多于300字',
            'apply.max'          => '请不要上传大于512KB的申报表图片',
            'img.max'            => '请不要上传大于512KB的封面图片',
            'strDataID.required' => '请勿非法提交',
            'strKey.required'    => '请勿非法提交',
        ]);

        if ($validate->fails()) {
            return $this->validateFailed($validate);
        }
        if ($this->uploadVerify($request->get('strDataID'))) {
            alert()->error('请上传视频')->persistent('关闭');

            return redirect()->back()->withInput();
        }

        $apply                = $request->all();
        $apply['img_hash']    = $this->saveImage($request->file('img'), "Application/Course");
        $apply['apply_hash']  = $this->saveImage($request->file('apply'), "Application/Apply");
        $apply['type']        = '微党课';
        $apply['detail']      = isset($apply['detail']) ? $apply['detail'] : $apply['summary'];
        $apply['branch_id']   = Auth::user()->branch_id;
        $apply['branch_type'] = Auth::user()->branch_type;
        $apply['university']  = Auth::user()->university;
        $apply['video_hash']  = $this->getUpload($request->get('strDataID'), $request->get('strKey'));
        Application::create($apply);

        alert()->success('提交成功，请等待审核')->persistent('关闭');

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
        return view('frontend.party.course.detail', $this->getShowData($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return mixed
     */
    public function edit($id)
    {
        return $this->editOrFail('frontend.party.course.edit', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $application                  = Application::findOrFail($id);
        $apply                        = $request->all();
        $application                  = $this->updateApplication($request, $application);
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
