<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Http\Controllers\Common\FileStorage;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Party\BranchRequest;

class BranchController extends Controller
{
    use FileStorage;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.party.branch.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.party.branch.establish')->withUser(access()->user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BranchRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $branch = Branch::new();
        $avatar = $this->putFile($request->file('avatar'), 'Branch/Avatar');
        $apply_img = $this->putFile($request->file('apply'), 'Applications/Branch');
        $new = $request->all();
        $branch->name = $new['name'];
        $branch->creator = Auth::user()->name;
        $branch->avatar = $avatar;
        $branch->summary = $new['summary'];
        $branch->total_membership = $new['total_membership'];
        $branch->address = $new['address'];
        $branch->apply_img = $apply_img;
        $branch->type = $new['type'];
        $branch->save();
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
