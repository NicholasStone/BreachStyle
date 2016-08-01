<?php

namespace App\Http\Middleware;

use Closure;

class Submit{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (access()->allow('submit')) {
            return $next($request);
        } else {
            alert()->error('您不能进行此操作');

            return redirect()->back();
        }
    }
}
