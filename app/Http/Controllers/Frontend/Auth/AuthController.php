<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Common\FileStorage;
use App\Http\Requests\Request;
use League\Flysystem\Config;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\SSORequest;
use App\Http\Requests\Frontend\User\BindRequest;
use App\Models\Access\User\User;
use App\Services\Access\Traits\ConfirmUsers;
use App\Services\Access\Traits\UseSocialite;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Services\Access\Traits\AuthenticatesAndRegistersUsers;
use App\Repositories\Frontend\Access\User\UserRepositoryContract;
use Illuminate\Support\Facades\Auth;

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
        $this->redirectAfterLogout = route('frontend.index');

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
}