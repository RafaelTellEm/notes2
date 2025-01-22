<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function index($value)
   {
    // Dentro do nosso RETURN/VIEW add um "array" ['value' => $value]
    // que seria o value que declaramos em nossa rota recendo o valor da variavel

    return view('main', ['value' => $value]);
   }
}
