<?php

namespace App\Http\Middleware;

use Closure;

class AuthApi
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
        if ($request->header('PHP_AUTH_USER', null) && $request->header('PHP_AUTH_PW', null) && $request->header('PHP_AUTH_USER') === env('API_USER') && $request->header('PHP_AUTH_PW') === env('API_PASSWORD')) {
            return $next($request);
        }
        $headers = ['WWW-Authenticate' => 'Basic'];
        return response()->make('Invalid credentials.', 401, $headers);
    }
}
