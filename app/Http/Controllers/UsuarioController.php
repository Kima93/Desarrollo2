<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        // Datos de ejemplo estáticos
        $usuarios = [
            [
                'id' => 1,
                'nombre' => 'Juan Pérez',
                'correo' => 'juan@example.com',
                'clave' => '********',
            ],
            [
                'id' => 2,
                'nombre' => 'Ana Torres',
                'correo' => 'ana@example.com',
                'clave' => '********',
            ],
        ];

        return response()->json($usuarios);
    }
}
