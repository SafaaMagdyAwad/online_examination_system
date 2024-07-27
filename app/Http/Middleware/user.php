<<<<<<< HEAD
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//middle ware works only when user is loged in 
        if($request->user()->student()){

            return $next($request);
        }else{
            return redirect('login_form');

        }
    }
}
=======
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//middle ware works only when user is loged in 
        if($request->user()->student()){

            return $next($request);
        }else{
            return redirect('login_form');

        }
    }
}
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
