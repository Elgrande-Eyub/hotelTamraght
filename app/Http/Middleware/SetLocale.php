<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1); // Assuming language segment is the first segment in the URL

        if (in_array($locale, ['en', 'fr','de','','admin'])) {
            app()->setLocale($locale);
        } else {
            // abort(404);
             app()->setLocale(config('app.fallback_locale'));
        }

        return $next($request);
    }
}
