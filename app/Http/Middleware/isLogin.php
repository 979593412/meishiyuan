<?php

namespace App\Http\Middleware;

use Closure;

class isLogin
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
        if(session()->get('admin_user')){
            return $next($request);
        }else{
            return redirect('admin/logins')->with('errors','请注意一下素质');
        }

    }
}
