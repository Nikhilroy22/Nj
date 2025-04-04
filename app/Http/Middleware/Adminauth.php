<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Adminauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
   
        
     if(Auth::check()){
       if(Auth::user()->type == 1){
                
        return $next($request);
            }
     return redirect()->route('404');
      }else{
     return redirect()->to('/');
      
      }
    
    }
}
