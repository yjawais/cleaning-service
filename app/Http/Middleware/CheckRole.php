<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // if (! $request->user()->hasRole($role)) {
        //     abort(401, 'This action is unauthorized.');
        // }
        // return $next($request);
        foreach($roles as $role) {
            // Check if user has the role This check will depend on how your roles are set up
            if($request->user()->hasRole($role))
                return $next($request);
        }
        abort(401, 'This action is unauthorized.');
    }
    

}
