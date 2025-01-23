<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Rota para autenticação
Route::get('/login', [AuthController::class, 'login']);

//Rota para receber submissão de formularios
Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);

Route::get('/logout', [AuthController::class, 'logout']);
