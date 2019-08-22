<?php

namespace App\Http\Middleware;

use Closure;

class lambaithi
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
        if($request->has('made')){
            return $next($request);
        }else{
            return redirect('thisinh/chondethi');
        }
    }
}
