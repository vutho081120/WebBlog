<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $language = $request->session()->get('website_language');

        App::setLocale($language);

        return $next($request);
    }
}
