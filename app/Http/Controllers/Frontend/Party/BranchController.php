<?php

namespace App\Http\Controllers\Frontend\Party;

use Auth;
use Validator;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Common\FileStorage;
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
        return view('frontend.party.branch.participate');
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
        $validate = Validator::make($request->all(), [
            'name'              => 'required',
            'avatar'            => 'required',
            'university'        => 'required|exists:universities,name',
            'secretary'         => 'required|exists:users,name',
            'secretary_summary' => 'required|max:100',
            'total_membership'  => 'required',
            'tel'               => 'required',
            'address'           => 'required|max:200',
            'summary'           => 'required|max:300',
            'apply'             => 'required',
        ], [
            'avatar.required' => '请上传配图',
            'apply.required'  => '请上传支部认证表',
        ]);
        if ($validate->fails()) {
            alert()->error($validate->errors()->all());

            return redirect()->back()->with($request->all());
        }
        $avatar = $this->saveImage($request->file('avatar'), 'Branch/Avatar');
        $apply_img = $this->saveImage($request->file('apply'), 'Applications/Branch');
        $user = Auth::user();
        $all = $request->all();
        $all['avatar'] = $avatar;
        $all['apply_img'] = $apply_img;
        $all['secretary'] = $user->name;
        $all['university'] = $user->university;
        $all['type'] = $user->type == '学生' ? '学生党支部' : '教师党支部';
        $branch = Branch::create($all);
        $user->branch_id = $branch ? $branch->id : '';
        $user->attachRole(2);
        $user->save();
        alert()->success('支部创建成功，您可以上传成果或浏览首页');

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
        $branch = Branch::with('secretary')->where('id', $id)->first();
        return view('frontend.party.branch.index', $branch);
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
