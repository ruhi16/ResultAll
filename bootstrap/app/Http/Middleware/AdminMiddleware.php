<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
         if(session()->has('user')){
 
             if(session()->get('role')=='Admin')
                 return $next($request);
             else {
                 session()->put('error','User\'s Role does not match!!!');
                 return redirect()->to('/login');    
             }
             
 
         }
         else{
             session()->put('error','User Not Found!!!');
             return redirect()->to('/login');
         }       
         
     }
}
