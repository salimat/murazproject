<?php

namespace App\Http\Controllers\Auth;

use App\User;

use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

  //  protected $redirectTo = '/Employes/create';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:employes'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'prenom_per' => $data['prenom_per'],
          'date_naissance' => $data['date_naissance'],
          'sexe_per' => $data['sexe_per'],
          'contact_per' => $data['contact_per'],
            'adresse_per' => $data['adresse_per'],
        //  'id_fonction' => $data['id_fonction'],
            'date_emb' => $data['date_emb'],
            //'login' => $data['login'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
        $user
       ->roles()
       ->attach(Role::where('name', 'Secretaire Medical')->first());

    return $user;
}
}
