<?php

namespace App\Http\Middleware;

use App\Models\Settings\Setting;
use Closure;

class MapSettings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $settings = Setting::find(4);
        if ($settings->value) {
            return $next($request);
        }else{
            alert()->info("此功能还未开放，敬请期待");

            return redirect()->route('frontend.index');
        }
    }
}
