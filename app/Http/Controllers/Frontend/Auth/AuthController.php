<?php

namespace App\Http\Controllers\Frontend\Auth;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\SinglePointRequest;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
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

    use AuthenticatesAndRegistersUsers, ConfirmUsers, ThrottlesLogins, UseSocialite;

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

    public function singlePointAuth(SinglePointRequest $request)
    {
        $uid = $request->get('user_id');
        $user = User::where('user_id', $uid)->first();
        if (empty($user)) {
            Session::set('user_id', $uid);
            redirect()->route('');//TODO 转到用户信息
        } else {
            Auth::login($user);
            return redirect()->route('frontend.index');
        }
    }

    public function singlePointRegister(UpdateProfileRequest $request)
    {
        if (Session::has('user_id'))
        $new = $request->all();
        $user = new User();
        //TODO 填写个人信息
        Auth::login($user);

        return redirect()->route('frontend.index');
    }
}