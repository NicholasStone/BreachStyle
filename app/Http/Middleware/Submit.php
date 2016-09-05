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
        }
        alert()->error('您不能上传成果');

        return redirect()->route('frontend.index');
    }
}
