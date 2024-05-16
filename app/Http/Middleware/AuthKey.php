<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $validTokens = ['ABCDE', '12345', 'setec'];
        $token = $request->header('APP_KEY');
        if (!in_array($token, $validTokens)) {
            return response()->json("Invalid Key", 401);
        }
        return $next($request);
    }
}
