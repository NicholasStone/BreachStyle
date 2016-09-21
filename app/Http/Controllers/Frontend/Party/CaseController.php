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
     * @param string $sort
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     */
    public function index($sort = 'created_at')
    {
        $type = "工作案例";
        $page = Application::with(['branch'])->where("type", $type)->where('verification', 1)->orderBy($sort, 'desc')->paginate(16);

        return view('frontend.party.common.list', compact("type", "page", "sort"))
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
        $application = Application::findOrFail($id);
        $comments = $application->comments;
        $branch = $application->branch;
        $university = $branch->university;

        return view('frontend.party.case.detail', compact("application", "comments", "branch", "university"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $application = Application::findOrFail($id);

        if($application->verification != -1){
            alert()->error("您现在不能修改成功信息");
            return redirect()->back();
        }
        return view('frontend.party.case.edit', $application);
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
        $apply = $request->all();
        if ($request->file('img')) {
            $img_hash = $this->saveImage($request->file('img'), "Application/Case");
            $application->img_hash = $img_hash;
        }
        if ($request->file('apply')) {
            $apply_hash = $this->saveImage($request->file('apply'), "Application/Apply");
            $application->apply_hash = $apply_hash;
        }
        $application->name = $apply['name'];
        $application->detail = $apply['detail'];
        $application->summary = $apply['summary'];
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
