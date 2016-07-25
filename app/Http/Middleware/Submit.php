<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

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
        if (Auth::user()->branch_id) {
            if (access()->allow('submit')) {
                return $next($request);
            } else {
                alert()->error('您不能进行此操作');

                return redirect()->back();
            }
        }else{
            alert()->error("请先加入或创建党支部");

            return redirect()->route('frontend.user.profile.detail');
        }
    }
}
