<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // Método para obtener todos los proyectos como JSON
    public function index()
    {
        return response()->json(Proyecto::all()); // Retorna todos los proyectos en formato JSON
    }
}
