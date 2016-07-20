<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Http\Controllers\Common\FileStorage;
use App\Models\Application;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\Frontend\Party\CaseRequest;
use App\Http\Controllers\Controller;

class CaseController extends Controller
{
    use FileStorage;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.party.case.index')
            ->withUser(access()->user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("frontend.party.case.index")
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
        $application = Application::new();
        $apply = $request->all();
        $img_hash = $this->putFile($request->file('img'), "Application/Case");
        $apply_hash = $this->putFile($request->file('apply'), "Application/Apply");
        $application->name = $apply['name'];
        $application->type = '工作案例';
        $application->detail = $apply['detail'];
        $application->summary = $apply['summary'];
        $application->branch_name = Auth::user()->branch_name;
        $application->img_hash = $img_hash;
        $application->apply_hash = $apply_hash;
        $application->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
