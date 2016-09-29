<?php

namespace App\Http\Controllers\Frontend\Party;

use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function store(CaseRequest $request)
    {
        $application              = new Application();
        $apply                    = $request->all();
        $img_hash                 = $this->saveImage($request->file('img'), "Application/Case");
        $apply_hash               = $this->saveImage($request->file('apply'), "Application/Apply");
        $application->name        = $apply['name'];
        $application->type        = '工作案例';
        $application->detail      = $apply['detail'];
        $application->summary     = $apply['summary'];
        $application->branch_id   = Auth::user()->branch_id;
        $application->branch_type = Auth::user()->branch_type;
        $application->university  = Auth::user()->university;
        $application->img_hash    = $img_hash;
        $application->apply_hash  = $apply_hash;
        $application->save();

        alert()->success('提交成功，请等待审核通过');

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
        $application = Application::findOrFail($id);
        $apply       = $request->all();
        $application = $this->updateApplication($request, $application);
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
