<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
          if($request->user()->hasRole('Biologiste Clinique')){
           return redirect('/acceuilBC/create');
           }
           elseif($request->user()->hasRole(['Secretaire Medical','Caissier'])){
           return redirect('/acceuilSecretariat/create');
           }
           elseif($request->user()->hasRole('Technicien Biomedical')){
           return redirect('/acceuiltbm/create');
           }
           else {
             return redirect('/acceuilAdmin/create');
        }



  }
    return $next($request);
}
}
