<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'department_name' => ['required', 'string', 'max:255'],
            'department_position' => ['required', 'string', 'max:255'],
            'salary' => ['required', 'numeric'],
            'web_site' => ['required', 'url'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [], [
            'name' => 'Nombre',
            'email' => 'Correo electrónico',
            'department_name' => 'Departamento',
            'department_position' => 'Cargo',
            'salary' => 'Salario',
            'web_site' => 'Sitio web',
            'password' => 'Contraseña',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $dep = Department::create([
            'department_name'     => $data['department_name'],
            'department_position' => $data['department_position'],
        ]);

        return User::create([
            'name'                => $data['name'],
            'email'               => $data['email'],
            'department_id'        => $dep->id,
            'salary'              => $data['salary'],
            'web_site'            => $data['web_site'],
            'password'            => Hash::make($data['password']),
        ]);
    }
}
