<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*  
    Añadir o mapear de de forma automática rutas apirest basandose 
    en un controlador con los metodos estandar
*/
Route::apiResource('users', UserController::class);