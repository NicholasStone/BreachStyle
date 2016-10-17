<?php

namespace App\Http\Controllers\Frontend\Party;

use Auth;
use Validator;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Common\FileStorage;
use App\Http\Requests\Frontend\Party\CaseRequest;
use App\Http\Controllers\Frontend\Party\Traits\ApplicationTrait;

class CaseController extends Controller
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
        $type = "工作案例";
        $page = $this->getIndexPage($type, $sort);

        return view('frontend.party.common.list', compact("type", "page", "sort"))
            ->withUser(access()->user());
    }

    public function index_m()
    {
        return view("frontend.mobile.list", $this->getIndexData_m("工作案例"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("frontend.party.case.create")
            ->withUser(access()->user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CaseRequest|Request $request
     * @return \Illuminate\Http\Response|mixed
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'    => 'required|unique:applications,name',
            'summary' => 'required|max:300',
            'detail'  => 'required',
            'apply'   => 'required|max:3072',
            'img'     => 'required|max:3072',
        ], [
            'name.unique'    => '此名称已存在',
            'apply.required' => '请上传申请表',
            'img.required'   => '请上传封面',
            'summary.max'    => '简介请不要多于300字',
            'apply.max'      => '请不要上传大于3MB的申报表图片',
            'img.max'        => '请不要上传大于3MB的封面图片',
        ]);


        if ($validate->fails()) {
            return $this->validateFailed($validate);
        }

        $apply                = $request->all();
        $apply['img_hash']    = $this->saveImage($request->file('img'), "Application/Case");
        $apply['apply_hash']  = $this->saveImage($request->file('apply'), "Application/Apply");
        $apply['type']        = '工作案例';
        $apply['branch_id']   = Auth::user()->branch_id;
        $apply['branch_type'] = Auth::user()->branch_type;
        $apply['university']  = Auth::user()->university;
        Application::create($apply);

        alert()->success('提交成功，请等待审核通过')->persistent('关闭');

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
        return view('frontend.party.case.detail', $this->getShowData($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->editOrFail('frontend.party.case.edit', $id);
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
        $application               = Application::findOrFail($id);
        $apply                     = $request->all();
        $application               = $this->updateApplication($request, $application);
        $application->detail       = $apply['detail'];
        $application->verification = 0;
        $application->save();

        alert()->success('提交成功，请等待审核通过');

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
