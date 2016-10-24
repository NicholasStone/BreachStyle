<?php

namespace App\Http\Controllers\Frontend\Party;

use phpDocumentor\Reflection\Types\Mixed;
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
     * @param        $type
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

    public function index_m()
    {
        $applications = Application::
        select(['id', 'name', 'type', 'branch_id', 'fancy', 'img_hash'])
            ->where('type', "学生党支部推荐展示")
            ->orWhere('type', "教师党支部推荐展示")
            ->withStatus()
            ->with(['branch' => function ($query) {
                $query->select(['id', 'name']);
            }, 'comments'    => function ($query) {
                $query->select(['id']);
            }])->orderBy('updated_at', 'desc')->get();

        $applications = $applications->each(function ($item) {
            $item->summary = mb_strimwidth($item->summary, 0, 30);
        });

        return view("frontend.mobile.list", compact("applications"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        list($strDataID, $strKey) = $this->generateVideoToken();

        return view('frontend.party.recommend.create', compact("strDataID", "strKey"))->withUser(access()->user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response|Mixed
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'      => 'required',
            'summary'   => 'required|max:300',
            'apply'     => 'required|max:512',
            'img'       => 'required|max:512',
            'detail'    => 'required',
            'strDataID' => 'required',
            'strKey'    => 'required',
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
        $apply                = $request->all();
        $apply['img_hash']    = $this->saveImage($request->file('img'), "Application/Recommend");
        $apply['apply_hash']  = $this->saveImage($request->file('apply'), "Application/Apply");
        $apply['type']        = Auth::user()->branch_type == '学生党支部' ? '学生党支部推荐展示' : '教师党支部推荐展示';
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
        return view('frontend.party.recommend.detail', $this->getShowData($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return mixed
     */
    public function edit($id)
    {
        return $this->editOrFail('frontend.party.recommend.edit', $id);
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
        $application = Application::findOrFail($id);
        $apply       = $request->all();
        $application = $this->updateApplication($request, $application);
        $application->detail       = $apply['detail'];
        $application->verification = 0;
        if ($this->getCachedCallback($request->get('strDataID'), $request->get('strKey'))) {
            $application->video_hash = $this->getUpload($request->get('strDataID'), $request->get('strKey'));
        }
        if ($request->get('delete_video') == 'on') {
            $application->video_hash = null;
        }
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
