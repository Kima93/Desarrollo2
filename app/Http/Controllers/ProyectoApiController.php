<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoApiController extends Controller
{
    public function index()
    {
        return response()->json(['mensaje' => 'Listar todos los proyectos (simulado)']);
    }

    public function store(Request $request)
    {
        return response()->json(['mensaje' => 'Proyecto agregado exitosamente (simulado)']);
    }

    public function show($id)
    {
        return response()->json(['mensaje' => "Detalle del proyecto con ID $id (simulado)"]);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['mensaje' => "Proyecto con ID $id actualizado correctamente (simulado)"]);
    }

    public function destroy($id)
    {
        return response()->json(['mensaje' => "Proyecto con ID $id eliminado correctamente (simulado)"]);
    }
}
