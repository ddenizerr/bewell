<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale')
            ?? session('locale')
            ?? config('app.locale');

        if (! in_array($locale, ['en', 'tr'])) {
            $locale = config('app.locale');
        }

        app()->setLocale($locale);
        session(['locale' => $locale]);

        return $next($request);
    }
}
