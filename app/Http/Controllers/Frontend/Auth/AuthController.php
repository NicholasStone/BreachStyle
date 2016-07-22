<?php

namespace App\Http\Controllers\Frontend\Auth;
use App\Http\Controllers\Common\FileStorage;
use App\Http\Requests\Request;
use League\Flysystem\Config;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\SinglePointRequest;
use App\Http\Requests\Frontend\User\BindRequest;
use App\Models\Access\User\User;
use App\Services\Access\Traits\ConfirmUsers;
use App\Services\Access\Traits\UseSocialite;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Services\Access\Traits\AuthenticatesAndRegistersUsers;
use App\Repositories\Frontend\Access\User\UserRepositoryContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

/**
 * Class AuthController
 * @package App\Http\Controllers\Frontend\Auth
 */
class AuthController extends Controller
{

    use AuthenticatesAndRegistersUsers, ConfirmUsers, ThrottlesLogins, UseSocialite, FileStorage;

    /**
     * @param UserRepositoryContract $user
     */
    public function __construct(UserRepositoryContract $user)
    {
        //Where to redirect after logging out
        $this->redirectAfterLogout = route('admin.dashboard');

        $this->user = $user;
    }

    /**
     * Where to redirect users after login / registration.
     * @return string
     */
    public function redirectPath()
    {
        if (access()->allow('view-backend')) {
            return route('admin.dashboard');
        }

        return route('frontend.index');
    }

    public function ssoAuth(SinglePointRequest $request)
    {
        $uid = $request->get('user_id');
        $user = User::where('user_id', $uid)->first();
        if (empty($user)) {
            Session::set('user_id', $uid);
            alert()->info('登录成功，请先补充个人信息');
            redirect()->route('auth.binding');
        } else {
            Auth::login($user);
            alert()->success('登录成功，请输入您的信息');
            return redirect()->route('frontend.index');
        }
    }

    public function ssoToken()
    {
        $subSiteId=\Config::get('app.sub-site-id');
        $privateKey = \Config::get('app.private-key');
        $token = date("YmdHis", time());
        $checkCode = md5($token.$subSiteId.$privateKey);
        return response(compact("subSiteId", "token", "checkCode"));
    }

    public function binding()
    {
        return view('frontend.user.bind');
    }

    public function ssoRegister(BindRequest $request)
    {
        if (!Session::has('user_id')){
            alert()->error('请先登录');
            return redirect()->route('frontend.index');
        }
        $all = $request->all();
        $all['user_id'] = Session::get('user_id');
        $all['avatar'] = $this->putFile($request->file('avatar'), 'User/Avatar');
        $user = User::Create($all);
        Auth::login($user);
        alert()->success('身份信息录入成功，请绑定党支部');
        
        return redirect()->route('frontend.branch.establish');
    }
}