<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Common\FileStorage;
use App\Models\Access\User\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\SSORequest;
use Illuminate\Http\Request;

class SSOAuthController extends Controller
{
    use FileStorage;

    public function ssoAuth(SSORequest $request)
    {
        $subSiteId = \Config::get('app.sub-site-id');
        $privateKey = \Config::get('app.private-key');
        $time_token = Session::get('time-token');
        $uid = $request->get('uId');
        $checkCode = md5($time_token . $subSiteId . $privateKey . $uid);
        if ($request->get('checkCode') != $checkCode) {
            alert()->error("登录失败");

            return redirect()->route('frontend.index');
        }
        $user = User::where('user_id', $uid)->first();
        if (empty($user)) {
            Session::set('user_id', $uid);
            alert()->success('登录成功，请先补充个人信息');

            return redirect()->route('sso.fill');
        } else {
            Auth::login($user);
            alert()->success('登录成功，请输入您的信息');

            return redirect()->route('frontend.index');
        }
    }

    public function ssoToken()
    {
        $subSiteId = \Config::get('app.sub-site-id');
        $privateKey = \Config::get('app.private-key');
        $token = date("YmdHis", time());
        Session::set('time-token', $token);
        $checkCode = md5($token . $subSiteId . $privateKey);

        return response()->json(compact("subSiteId", "token", "checkCode"));
    }

    public function binding()
    {
        return view('frontend.user.fill');
    }

    public function complete(Request $request)
    {
        if (!Session::has('user_id')) {
            alert()->error('请先登录');

            return redirect()->route('frontend.index');
        }
        $fill = $request->all();
        $validate = Validator::make($fill, [
            'name'       => 'required',
            'id_number'  => 'required',
            'type'       => 'required|in:学生,教师',
            'province'   => 'required|exists:provinces,name',
            'city'       => 'required|max:20',
            'university' => 'required|exists:universities,name',
            'tel_work'   => 'required',
            'tel'        => 'required',
            'email'      => 'required|email',
            'avatar'     => 'required',
        ], [
            'university.exists' => '所填大学不存在',
            'avatar.required' => '请上传头像',
        ]);
        if ($validate->fails()) {
            alert()->error($validate->errors()->all());

            return redirect()->back();
        }
        $fill['user_id'] = Session::get('user_id');
        $fill['avatar'] = $this->putFile($request->file('avatar'), 'User/Avatar');
        $user = User::Create($fill);
        Auth::login($user);
        alert()->success('身份信息录入成功');

        return redirect()->route('frontend.user.profile');
    }

    public function lab(Request $request)
    {
        dd($request->all());
    }
}
