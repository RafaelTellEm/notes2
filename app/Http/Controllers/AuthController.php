<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Criado as duas funções tanto para login quanto para logout
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        echo 'Login Submit';
    }

    public function logout()
    {
        return view('logout');
    }
}
