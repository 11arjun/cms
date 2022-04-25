<?php

namespace App\Http\Middleware;

use Closure;

class Ward_palika
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
          if(auth()->user()->user_type == 'WP'){
return $next($request);

}
return redirect('home')->with('error','Unauthorize Access');  
    }
}
