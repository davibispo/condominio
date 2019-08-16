<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Models\Unidade;
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
    protected $redirectTo = '/home';

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
            'cpf' => ['required', 'string', 'max:14', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
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
            'unidade' => $data['unidade'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'sexo' => $data['sexo'],
            'tel1' => $data['tel1'],
            'tel2' => $data['tel2'],
            'cpf' => $data['cpf'],
            'data_nascimento' => $data['data_nascimento'],
            'foto' => $data['foto'],
            'residente1' => $data['residente1'],
            'idade_residente1' => $data['idade_residente1'],
            'sexo_residente1' => $data['sexo_residente1'],

            'residente2' => $data['residente2'],
            'idade_residente2' => $data['idade_residente2'],
            'sexo_residente2' => $data['sexo_residente2'],

            'residente3' => $data['residente3'],
            'idade_residente3' => $data['idade_residente3'],
            'sexo_residente3' => $data['sexo_residente3'],

            'residente4' => $data['residente4'],
            'idade_residente4' => $data['idade_residente4'],
            'sexo_residente4' => $data['sexo_residente4'],

            'residente5' => $data['residente5'],
            'idade_residente5' => $data['idade_residente5'],
            'sexo_residente5' => $data['sexo_residente5'],

            'residente6' => $data['residente6'],
            'idade_residente6' => $data['idade_residente6'],
            'sexo_residente6' => $data['sexo_residente6'],

            'residente7' => $data['residente7'],
            'idade_residente7' => $data['idade_residente7'],
            'sexo_residente7' => $data['sexo_residente7'],

            'residente8' => $data['residente8'],
            'idade_residente8' => $data['idade_residente8'],
            'sexo_residente8' => $data['sexo_residente8'],

            'tipo' => $data['tipo'],
            'status' => '0',
        ]);

    }
}
