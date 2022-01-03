<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // $cutomer = true;
        // if($cutomer)
        // {
        //     abort(301,'ban ko co quyen truy cap');
        // }
            // check la dang nhap
        // guest la chua dang nhap
        if(Auth::guard('admin')->guest()==true ){
            
            return redirect()->route('show.login');
        }

        // else
        // {
        //     if(Auth::guard('admin')->user()->status==1)
        //          return $next($request);
        // }
           return $next($request);
             
    }
}
