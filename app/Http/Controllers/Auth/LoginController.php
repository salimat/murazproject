<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    //protected $redirectTo = '/acceuilSecretariat';
    public function redirectTo(Request $request){


        /*//  $role = Auth::user()->role->name;
          $role = auth()->user()->role->name;

          // Check user role
          switch ($role) {
              case 'Biologiste Clinique':
                      return '/acceuilBC';
                  break;
              case 'Secretaire Medical':
                      return '/acceuilSecretariat';
                  break;
              case 'Caissier':
                          return '/acceuilSecretariat';
                  break;
              case 'Technicien Biomedical':
                          return '/acceuiltbm';
                  break;
                case 'Administrateur':
                              return '/acceuilAdmin';
                      break;
              default:
                      return '/acceuilSecretariat';
                  break;
          }*/
          if($request->user()->authorizeRoles('Biologiste Clinique'))
          {
            return view('Acceuil.acceuilBC');
          }
          elseif ($request->user()->authorizeRoles(['Secretaire Medical','Caissier'])) {
            return view('Acceuil.acceuilSecretariat');
          }
          elseif ($request->user()->authorizeRoles('Technicien Biomedical'))
          {
            return view('Acceuil.acceuilTBM');
          }
          else {
            return view('Acceuil.acceuilAdmin');
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
