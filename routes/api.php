<?php
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\AuthController;


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/usuarios', [UsuarioController::class, 'index']);
    Route::post('/usuarios', [UsuarioController::class, 'store']);
    Route::post('/login', [AuthController::class, 'login']); // Agrega las demás rutas protegidas aquí
});
