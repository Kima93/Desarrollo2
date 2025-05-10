<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;


Route::get('/proyectos', [ProyectoController::class, 'index']);  // Vista de todos los proyectos
Route::get('/proyectos/create', [ProyectoController::class, 'create']);  // Vista para crear proyecto
Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);  // Vista de un proyecto específico
Route::get('/proyectos/{id}/edit', [ProyectoController::class, 'edit']);  // Vista para editar proyecto
Route::post('/proyectos', [ProyectoController::class, 'store']);  // Crear un proyecto
Route::put('/proyectos/{id}', [ProyectoController::class, 'update']);  // Actualizar proyecto
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);  // Eliminar proyecto

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.post');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register.post');