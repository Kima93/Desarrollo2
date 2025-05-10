<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = [
            [
                'id' => 1,
                'nombre' => 'Sistema CRM',
                'fecha_inicio' => '2025-05-01',
                'estado' => 'En desarrollo',
                'responsable' => 'Juan Pérez',
                'monto' => 5000.00,
                'created_by' => 1,
            ],
            [
                'id' => 2,
                'nombre' => 'App Móvil',
                'fecha_inicio' => '2025-04-15',
                'estado' => 'Completado',
                'responsable' => 'Ana Torres',
                'monto' => 8000.00,
                'created_by' => 2,
            ],
        ];
        return view('proyectos.index', compact('proyectos'));
    }
    public function create()
    {
        return view('proyectos.create');
    }
}
