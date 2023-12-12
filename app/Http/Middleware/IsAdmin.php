<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){

        if(Session::has('userrole') && Session::get('userrole')!='admin'){
            return redirect()->to('/dashboard3')->with('msg', 'You are not authorized');;
            //return redirect()->back;
        }
            return $next($request);
        }
    }
