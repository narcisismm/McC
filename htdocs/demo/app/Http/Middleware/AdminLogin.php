<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redis;

class AdminLogin
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
        if (!session('user')) {

            return redirect('admin/login');
        }
        $username = session('user')->username;
        if (session_id() !== Redis::get($username)){
            return redirect('admin/login');
        }
        return $next($request);
    }
}
