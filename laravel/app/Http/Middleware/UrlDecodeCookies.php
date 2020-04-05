<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UrlDecodeCookies
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $headers = $request->headers->all();

        $headers['cookie'][0] = urldecode($headers['cookie'][0]);

        $request->headers->replace($headers);

        return $next($request);
    }
}
