<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FichajeController;
use App\Http\Controllers\CredencialController;

Route::get('/empresas', [EmpresaController::class, 'index']);
Route::post('/empresas', [EmpresaController::class, 'store']);
Route::get('/empresas/{id}', [EmpresaController::class, 'show']);
Route::put('/empresas/{id}', [EmpresaController::class, 'update']);
Route::delete('/empresas/{id}', [EmpresaController::class, 'destroy']);

Route::get('/usuarios', [UserController::class, 'index']);
Route::post('/usuarios', [UserController::class, 'store']);
Route::get('/usuarios/{id}', [UserController::class, 'show']);
Route::put('/usuarios/{id}', [UserController::class, 'update']);
Route::delete('/usuarios/{id}', [UserController::class, 'destroy']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/credenciales', [CredencialController::class, 'index']);
Route::post('/credenciales', [CredencialController::class, 'store']);
Route::get('/credenciales/{id}', [CredencialController::class, 'show']);
Route::put('/credenciales/{id}', [CredencialController::class, 'update']);
Route::delete('/credenciales/{id}', [CredencialController::class, 'destroy']);

Route::get('/fichajes', [FichajeController::class, 'index']);
Route::post('/fichajes', [FichajeController::class, 'store']);
Route::get('/fichajes/{id}', [FichajeController::class, 'show']);
Route::put('/fichajes/{id}', [FichajeController::class, 'update']);
Route::delete('/fichajes/{id}', [FichajeController::class, 'destroy']);
Route::post('/fichajes/filtrar', [FichajeController::class, 'obtenerPorTrabajadorYRango']);




