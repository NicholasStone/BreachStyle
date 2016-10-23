<?php

namespace App\Http\Controllers\Frontend\User;

use Validator;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Models\Access\User\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Common\FileStorage;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;

/**
 * Class ProfileController
 * @package App\Http\Controllers\Frontend
 */
class ProfileController extends Controller
{
    use FileStorage;

    /**
     * @param  UpdateProfileRequest $request
     * @return mixed
     */
    public function update(UpdateProfileRequest $request)
    {
        $update = $request->only([
            'name', 'id_number', 'tel_work', 'tel', 'email', 'province', 'university', 'city'
        ]);
        if ($request->hasFile('avatar')) {
            $update['avatar'] = $this->saveImage($request->file('avatar'), "Application/Case");
        }
        foreach ($update as $item => $value) {
            if(empty($update[ $item ])) {
                unset($update[ $item ]);
            }
        }
//        if (isset($update['id_number']) && empty($update['id_number'])) {
//            unset($update['id_number']);
//        }
        $user = User::find(Auth::id());
        $user->update($update);
        alert()->success("信息修改成功");

        return redirect()->route('frontend.user.profile.detail');
    }

    /**
     * 用户信息
     */
    public function show()
    {
        $user = Auth::user();
        if (!$user->user_id) {
            return redirect()->route('admin.dashboard');
        }
        $user->branch;
        $branches = Branch::where('university', $user->university)->get();
        $notifies = $user->getNotifications();

        return view('frontend.user.detail')->with(compact("user", "branches", "notifies"));
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

        $user            = Auth::user();
        $user->branch_id = $request->get('bind');
        $user->save();

        alert()->success('加入成功!');

        return redirect()->back();
    }

    public function edit()
    {
        return view('frontend.user.edit')->withUser(Auth::user());
    }
}