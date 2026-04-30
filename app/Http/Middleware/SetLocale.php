<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     * Locale priority: session → APP_LOCALE env → config default.
     */
    public function handle(Request $request, Closure $next)
    {
        $available = Config::get('app.available_locales', ['ar', 'en']);

        if (Session::has('locale') && in_array(Session::get('locale'), $available)) {
            App::setLocale(Session::get('locale'));
        } else {
            App::setLocale(Config::get('app.locale', 'ar'));
        }

        return $next($request);
    }
}
