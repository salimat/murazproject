<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/acceuilSecretariat/create';
    protected function redirectTo()
     {
             // Logic that determines where to send the user
             if(auth()->user()->hasRole('Biologiste Clinique')){
              return redirect('/acceuilBC/create');


              }
              elseif(auth()->user()->hasRole(['Secretaire Medical','Caissier'])){
              return redirect('/acceuilSecretariat/create ');


              }
              elseif(auth()->user()->hasRole('Technicien Biomedical')){
                    return redirect('/acceuiltbm/create');


              }
              else {
                return redirect('/login');


              }


     }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('guest')->except('logout');
      $this->middleware('guest')->except('logout');
    }
}
