<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Common\FileStorage;
use App\Models\Access\User\User;
use App\Models\Province;
use App\Models\University;
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
        $subSiteId  = \Config::get('app.sub-site-id');
        $privateKey = \Config::get('app.private-key');
        $time_token = Session::get('time-token');
        $uid        = $request->get('uId');
        $checkCode  = md5($time_token . $subSiteId . $privateKey . $uid);
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
            if (!$user->status) {
                alert()->error("您的账户已被冻结，请联系管理员");
            } else {
                Auth::login($user);

                //get Notifies
                $notifies = $user->countNotificationsNotRead();;
                alert()->success('登录成功');
                if ($notifies) {
                    alert()->info('您有' . $notifies . '条未读信息，请到个人中心查看');
                }
            }

            return redirect()->route('frontend.index');
        }
    }

    public function ssoToken()
    {
        $subSiteId  = \Config::get('app.sub-site-id');
        $privateKey = \Config::get('app.private-key');
        $token      = date("YmdHis", time());
        Session::set('time-token', $token);
        $checkCode = md5($token . $subSiteId . $privateKey);

        return response()->json(compact("subSiteId", "token", "checkCode"));
    }

    public function binding()
    {
        if (Auth::check() && Auth::user()->name) {
            return redirect()->route('frontend.index');
        }
        $universities = Province::with("universities")->where('name', '北京市')->first();
        $universities = $universities->universities;

        return view('frontend.user.fill', compact('universities'));
    }

    public function complete(Request $request)
    {
        return redirect()->back()->withInput();

        if (Session::has('id')) {
            return redirect()->back();
        }
        if (!Session::has('user_id')) {
            alert()->error('请先登录');

            return redirect()->route('frontend.index');
        }
        $fill     = $request->all();
        $validate = Validator::make($fill, [
            'name'       => 'required',
            'id_number'  => 'required|unique:users,id_number',
            'type'       => 'required|in:学生,教师',
            'province'   => 'required|exists:provinces,name',
            'city'       => 'required|max:20',
            'university' => 'required|exists:universities,name',
            'tel_work'   => 'required|unique:users,tel',
            'tel'        => 'required|unique:users,tel_work',
            'email'      => 'required|email|unique:users,email',
            'avatar'     => 'required|image|max:2048',
        ], [
            'university.exists' => '所填大学不存在',
            'avatar.required'   => '请上传头像',
            'tel.unique'        => '此电话已存在',
            'tel_work.unique'   => '此工作电话已存在',
            'email.email'       => '请写入正确的电子邮箱',
            'email.unique'      => '此邮箱已存在',
            'avatar.max'        => '请上传小于2MB的图片',
            'avatar.image'      => '请上传图片',
        ]);
        if ($validate->fails()) {
            alert()->error($validate->errors()->all())->persistent('关闭');

            return redirect()->back()->withInput();
        }
        $fill['user_id'] = Session::get('user_id');
        $fill['avatar']  = $this->saveImage($request->file('avatar'), 'User/Avatar');
        $user            = User::Create($fill);
        Auth::login($user);
        alert()->success('身份信息录入成功');

        return redirect()->route('frontend.user.profile.detail');
    }

    public function getUniversity(Request $request)
    {
        $universities = Province::with("universities")->where('name', $request->get('province'))->first();

        return response()->json($universities['universities']);
    }
}
