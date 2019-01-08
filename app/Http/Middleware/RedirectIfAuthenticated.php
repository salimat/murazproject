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
           //return redirect('/acceuilBC/create');
           return '/acceuilBC/create';

            //return redirect()->route('/acceuilBC/create');
           }
           elseif($request->user()->hasRole(['Secretaire Medical'])){
           //return redirect('/acceuilSecretariat/create');
           return '/acceuilSecretariat/create';

           // return redirect()->route('/acceuilSecretariat/create');
           }
           elseif($request->user()->hasRole(['Caissier'])){
           //return redirect('/acceuilSecretariat/create');
           return '/acceuilSecretariat/create';

           // return redirect()->route('/acceuilSecretariat/create');
           }
           elseif($request->user()->hasRole('Technicien Biomedical')){
           //return redirect('/acceuiltbm/create');
           return '/acceuiltbm/create';

            //return redirect()->route('/acceuiltbm/create');
           }
           elseif($request->user()->hasRole('Administrateur')){
           //return redirect('/acceuiltbm/create');
           return '/acceuilAdmin/create';

            //return redirect()->route('/acceuiltbm/create');
           }
           else {
             //return redirect('/acceuilAdmin/create');
           return '/acceuilAdmin/create';
        }



  }
    return $next($request);
}
}
