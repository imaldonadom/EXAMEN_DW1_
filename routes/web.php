<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;

Route::resource('usuarios', UsuarioController::class);
Route::resource('productos', ProductoController::class);
Route::resource('clientes', ClienteController::class);