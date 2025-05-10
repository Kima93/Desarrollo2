<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UFController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;


Route::get('/proyectos', [ProyectoController::class, 'apiIndex']);  // API para obtener todos los proyectos
Route::post('/proyectos', [ProyectoController::class, 'apiStore']);  // API para crear un proyecto
Route::get('/proyectos/{id}', [ProyectoController::class, 'apiShow']);  // API para obtener un proyecto específico
Route::put('/proyectos/{id}', [ProyectoController::class, 'apiUpdate']);  // API para actualizar un proyecto
Route::delete('/proyectos/{id}', [ProyectoController::class, 'Destroy']);  // API para eliminar un proyecto


Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/proyectos', [ProyectoController::class, 'index']);

Route::middleware(['jwt.auth'])->get('/protegido', function () {
    return response()->json(['mensaje' => 'Acceso permitido. Usuario autenticado.']);
});

  

