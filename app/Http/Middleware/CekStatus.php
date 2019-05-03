<?php

namespace App\Http\Middleware;

use Closure;

class CekStatus
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
        $user = \App\User::where('email', $request->email)->first();
        if ($user->level == 'admin') {
            return redirect('admin');
        } elseif ($user->level == 'user') {
            return redirect('home');
        }
        return $next($request);
    }
}
