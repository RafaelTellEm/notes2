<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    echo "About us";
});

/* Rota recebendo um valor. apos o nome da nossa rota ('/main) inserimos
o /{value} e em nossos controller declaramos a variavel VALUE */

Route::get('/main/{value}', [MainController::class, 'index' ]);