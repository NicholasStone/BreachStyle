<?php

namespace App\Http\Controllers\Frontend\Party;

use Auth;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Common\FileStorage;
use App\Http\Requests\Frontend\Party\CaseRequest;

class CaseController extends Controller
{
    use FileStorage;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = "工作案例";
        $applications = Application::with(['branch'])->where("type", $type)->where('verification', 1)->paginate(16);

        return view('frontend.party.common.list', compact("type", "applications"))
            ->withUser(access()->user());
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
        $application = new Application();
        $apply = $request->all();
        $img_hash = $this->saveImage($request->file('img'), "Application/Case");
        $apply_hash = $this->saveImage($request->file('apply'), "Application/Apply");
        $application->name = $apply['name'];
        $application->type = '工作案例';
        $application->detail = $apply['detail'];
        $application->summary = $apply['summary'];
        $application->branch_id = Auth::user()->branch_id;
        $application->branch_type = Auth::user()->branch_type;
        $application->img_hash = $img_hash;
        $application->apply_hash = $apply_hash;
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
        $application = Application::find($id);
        $comments = $application->comments;
        $branch = $application->branch;
        $university = $branch->university;
        return view('frontend.party.case.detail', compact("application", "comments", "branch", "university"));
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
