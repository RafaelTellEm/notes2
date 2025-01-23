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
        //Validação de Formulario
        $request->validate(
            [
                'text_username' => 'required',
                'text_password' => 'required'

            ]);

            //Get user input
            $username = $request->input('text_username');
            $password = $request->input('text_password');

            echo "OK!";
    }

    public function logout()
    {
        return view('logout');
    }
}
