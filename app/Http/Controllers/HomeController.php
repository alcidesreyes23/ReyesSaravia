<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'department_name' => 'Sistemas',
                'department_positon' => 'Diseñador web',
            ],
            [
                'id' => 2,
                'department_name' => 'Sistemas',
                'department_positon' => 'Desarrollador web',
            ],
            [
                'id' => 3,
                'department_name' => 'RRHH',
                'department_positon' => 'Gerente de recursos humanos',
            ],
        ];
        return view('home',compact('users'));
    }
}
