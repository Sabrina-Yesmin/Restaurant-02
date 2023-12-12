<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class IsCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){

        if(Session::has('userrole') && Session::get('userrole')!='customer'){
            return redirect()->to('/dashboard2')->with('msg', 'You are not authorized');;
        }
            return $next($request);
        }
    }
