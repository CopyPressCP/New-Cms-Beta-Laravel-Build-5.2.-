<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
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
        $user = $request->user(); //null if signed in

        if ($user && $user->first_name == 'MoeTest')
        {
        }

        return $next($request);

        abort (404, 'You are not an Admin!');
    }
}
