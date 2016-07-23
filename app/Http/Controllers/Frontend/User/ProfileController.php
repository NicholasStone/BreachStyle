<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
use App\Http\Requests\Request;
use App\Models\Branch;
use Illuminate\Support\Facades\Auth;
use Validator;

/**
 * Class ProfileController
 * @package App\Http\Controllers\Frontend
 */
class ProfileController extends Controller
{
    /**
     * @param  UpdateProfileRequest $request
     * @return mixed
     */
    public function update(UpdateProfileRequest $request)
    {
        $user = Auth::user();
        $branch = Branch::where('secretary', $user->name)->first();
        if ($branch) {
            $branch->secretary = $request->get('name');
            $branch->save();
        }
        $user->name = $request->get('name');
        $user->tel = $request->get('tel');
        $user->save();
        alert()->success("信息修改成功");

        return redirect()->back();
    }

    public function show()
    {
        $user = access()->user();
        $university = $user->university;
        $branches = Branch::where('university', $university)->get();
        return view('frontend.user.detail')->with(compact("user", "branches"));
    }

    public function join(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'bind' => 'required|exists:branch,name',
        ], [
            'exists' => '您所选的党支部不存在!',
        ]);

        if ($validate->fails()) {
            alert()->error($validate->errors()->all()->toArray());

            return redirect()->back();
        }

        $user = access()->user();
        $user->branch_name = $request->get('bind');
        $user->save();

        alert()->success('加入成功!');
        return redirect()->back();
    }
}