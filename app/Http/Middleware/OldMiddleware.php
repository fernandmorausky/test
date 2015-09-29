<?php

namespace App\Http\Middleware;

use Closure;

class OldMiddleware
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
        //echo "Hola";
        //echo $request->input('home').'<br>';
         if ($request->input('age') == '') {
            //return redirect('home');
        }
        return $next($request);
    }
}
