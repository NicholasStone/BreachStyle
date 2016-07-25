<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Common\FileStorage;
use App\Http\Requests\Frontend\Party\RecommendRequest;
use Illuminate\Support\Facades\Auth;

class RecommendController extends Controller
{
    use FileStorage;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.recommend.index')->withUser(access()->user());
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
     * @param  RecommendRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecommendRequest $request)
    {
        $application = new Application();
        $apply = $request->all();
        $img_hash = $this->saveImage($request->file('img'), "Application/Recommend");
        $apply_hash = $this->saveImage($request->file('apply'), "Application/Apply");
        $application->name = $apply['name'];
        $application->type = Auth::user()->branch_type == '学生党支部'?'学生党支部推荐展示':'教师党支部推荐展示';
        $application->detail = $apply['detail'];
        $application->summary = $apply['summary'];
        $application->branch_id = Auth::user()->branch_id;
        $application->img_hash = $img_hash;
        $application->apply_hash = $apply_hash;
        $application->save();

        alert()->success('提交成功，请等待审核');
        return redirect()->route('frontend.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
