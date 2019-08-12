<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\thisinh_ds;
use App\admin_ds;
use App\nguoirade_ds;

use Closure;

class loginadmin
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
        if(Auth::guard('admin_ds')->check()){
            return $next($request);
        }else{
            return redirect('admin/login');
        }
    }
}
