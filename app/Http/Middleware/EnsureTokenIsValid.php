<?php

namespace App\Http\Middleware;

use App\Http\Middleware\EnsureTokenIsValid;
use Closure;

class EnsureTokenIsValid
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
        if ($request->header('api_token') !== 'WhwdEWkz6DTHSCDqg1b6LIPNsVosfIThxuNS69LuFBfUASPCVzxCDrzZuNOpXybn9ocmOUxHQcUMvAzA') {
           return redirect('home');
        }

     //   echo $request->header('api_token');

        return $next($request);
    }
}
