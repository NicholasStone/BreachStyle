<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Submit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->user_id) {
            if (Auth::user()->branch != null && access()->allow('submit')) {
                return $next($request);
            }
            if (!Auth::user()->branch) {
                alert()->error('请到个人中心加入或创建党支部');
                return redirect()->route('frontend.user.profile.detail');
            }elseif(Auth::user()->branch->verification != 1){
                alert()->error('请耐心等待支部信息审核通过');
                return redirect()->back();
            }
        }

        alert()->error('后台管理员不能提交信息');
        return redirect()->route('frontend.user.profile.detail');
    }
}
