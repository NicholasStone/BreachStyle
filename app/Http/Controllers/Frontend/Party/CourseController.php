<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Http\Requests\Frontend\Party\CourseRequest;
use App\Models\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("frontend.party.course.index")
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        dd($request->all());
        $application = new Application();
        $apply = $request->all();
        $img_hash = $this->putFile($request->file('img'), "Application/Course");
        $apply_hash = $this->putFile($request->file('apply'), "Application/Apply");
        $application->name = $apply['name'];
        $application->type = '微党课';
        $application->summary = $apply['summary'];
        $application->branch_name = Auth::user()->branch_name;
        $application->course_lecturer = $apply['course_lecturer'];
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
