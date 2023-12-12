<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class APIauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userDB = new User();

        $uname = $request->header('username');
        $password = $request->header('password');

        if(!(isset($uname) && isset($password))) { return response()->json([], 402); }

        $validated = $userDB->authenticate($uname, $password);

        if ($validated) {
            return $next($request);
        } else {
            return response()->json(['error' => 'invalid token'], 402);
        }
    }
}
