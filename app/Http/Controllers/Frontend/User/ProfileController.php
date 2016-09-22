<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
use Illuminate\Http\Request;
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
        $user->name = $request->get('name');
        $user->tel = $request->get('tel');
        $user->save();
        alert()->success("信息修改成功");

        return redirect()->back();
    }

    /**
     * 用户信息
     */
    public function show()
    {
        $user = Auth::user();
        if(!$user->user_id) {
            return redirect()->route('admin.dashboard');
        }
        $user->branch;
        $branches = $user->university->branches;
        $notifies = $user->getNotifications();
        return view('frontend.user.detail')->with(compact("user", "branches","notifies"));
    }

    /**
     * 添加党支部
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function join(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'bind' => 'required|exists:branches,id',
        ], [
            'exists' => '您所选的党支部不存在!',
        ]);

        if ($validate->fails()) {
            alert()->error($validate->errors()->all());

            return redirect()->back();
        }

        $user = Auth::user();
        $user->branch_id = $request->get('bind');
        $user->save();

        alert()->success('加入成功!');
        return redirect()->back();
    }
}