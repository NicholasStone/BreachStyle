<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Models\Application;
use Auth;
use Validator;
use App\Models\Branch;
use App\Models\University;
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
     * @param null $id
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        list($page, $university) = $this->getIndexData($id);
//        $page = $page->each(function($item){
//            $item->summary = mb_strimwidth($item->summary, 0,30);
//        });
        return view('frontend.party.branch.participate', compact("page", "university"));

    }

    public function index_m($id = null)
    {
        list($page, $university) = $this->getIndexData($id);

        return view('frontend.mobile.branch-index', compact("page", "university"));
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
//        dd($request->all());
        $validate = Validator::make($request->all(), [
            'name'              => 'required',
            'avatar'            => 'required',
            'type'              => 'required|in:学生党支部,教师党支部',
            'university'        => 'required|exists:universities,name',
            'secretary'         => 'required|exists:users,name',
            'secretary_summary' => 'required|max:100',
            'total_membership'  => 'required',
            'tel'               => 'required|unique:branches,tel',
            'address'           => 'required|max:200',
            'summary'           => 'required|max:300',
            'detail'            => 'required',
            'apply'             => 'required',
        ], [
            'tel.unique'        => '此工作号码已存在',
            'secretary.exists'  => '此用户不存在',
            'university.exists' => '此学校不存在',
        ]);

        if ($validate->fails()) {
            alert()->error($validate->errors()->all());

            return redirect()->back();
        }
        $user              = Auth::user();
        $all               = $request->only([
            'name', 'avatar', 'type', 'university', 'secretary',
            'secretary_summary', 'total_membership',
            'tel', 'address', 'summary', 'detail', 'apply',
        ]);
        $all['avatar']     = $this->saveImage($request->file('avatar'), 'Branch/Avatar');
        $all['apply_img']  = $this->saveImage($request->file('apply'), 'Branch/Applies');
        $all['university'] = $user->university;
        $branch            = Branch::create($all);
        $branch->secretary = $user->id;
        $branch->save();
        $user->branch_id = $branch ? $branch->id : '';
        $user->save();
        alert()->success('支部创建成功，请耐心等待审核通过');

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
        list($branch, $application) = $this->getShowData($id);

        return view('frontend.party.branch.index', compact("branch", "application"));
    }

    public function show_m($id)
    {
        list($branch, $application) = $this->getShowData($id);

        return view('frontend.mobile.branch-detail', compact("branch", "application"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branch::findOrFail($id);
        if ($branch->verification != -1) {
            alert()->error("您现在不能修改支部信息");

            return redirect()->back();
        } else {
            return view('frontend.party.branch.edit', Branch::find($id));
        }
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
        $validate = Validator::make($request->all(), [
            'type'              => 'in:学生党支部,教师党支部',
            'secretary'         => 'exists:users,name',
            'secretary_summary' => 'max:100',
            'address'           => 'max:200',
            'summary'           => 'max:300',
        ]);

        if ($validate->fails()) {
            alert()->error($validate->errors()->all());

            return redirect()->back();
        }

        $branch = Branch::findOrFail($id);
        $all    = $request->only([
            'name', 'type', 'secretary', 'secretary_summary',
            'total_membership', 'tel', 'address', 'summary', 'detail',
        ]);

        if ($request->file('avatar')) {
            $img_hash      = $this->saveImage($request->file('avatar'), "Branch/avatar");
            $all['avatar'] = $img_hash;
        }
        if ($request->file('apply_img')) {
            $apply_hash       = $this->saveImage($request->file('apply_img'), "Branch/Applies");
            $all['apply_img'] = $apply_hash;
        }
        $branch->verification = 0;
        $branch->update($all);
        $branch->save();

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

    /**
     * @param $id
     * @return array
     */
    protected function getIndexData($id)
    {
        if (empty($id)) {
            $page       = Branch::select(['id', 'type', 'name', 'university', 'avatar', 'summary'])->where('verification', 1)->withProvince()->paginate(16);
            $university = null;

            return [$page, $university];
        } else {
            $university = University::findOrFail($id);
            $page       = Branch::select(['id', 'name', 'branch_id', 'avatar', 'summary'])->where('university', $university->name)->withProvince()->paginate();

            return [$page, $university];
        }
    }

    /**
     * @param $id
     * @return array
     */
    protected function getShowData($id)
    {
        $branch                                = Branch::with(['secretary' => function ($query) {
            $query->select(['id', 'name', 'avatar']);
        }])->where('id', $id)->first();
        $application['微党课']                    = Application::withStatus()->where('branch_id', $branch->id)->where('type', '微党课')->get();
        $application['工作案例']                   = Application::withStatus()->where('branch_id', $branch->id)->where('type', '工作案例')->get();
        $application[ $branch->type . '推荐展示' ] = Application::withStatus()->where('branch_id', $branch->id)->where('type', $branch->type . '推荐展示')->get();

        return [$branch, $application];
    }
}
