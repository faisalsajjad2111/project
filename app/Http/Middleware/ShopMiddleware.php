<?php

namespace App\Http\Middleware;

use Closure;

class ShopMiddleware
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
        if($request['shop_id'] == 1){
        return $next($request);
        }else{
            return abort(419);
        }
    }
}
