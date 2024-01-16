<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use DB;
use Illuminate\Support\Facades\View;


class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = DB::table("users")
                    ->join("user_types", "users.user_id", "=", "user_types.user_id")
                    ->where("users.user_id", $request->user()->user_id)
                    ->first();
        View::share('user', $user);
        return $next($request);
    }
}
