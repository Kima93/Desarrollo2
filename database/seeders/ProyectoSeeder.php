<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoSeeder extends Seeder
{
    public function run()
    {
        Proyecto::create([
            'nombre' => 'Sistema de Inventario',
            'fecha_inicio' => '2024-01-15',
            'estado' => 'En progreso',
            'responsable' => 'Juan Pérez',
            'monto' => 500000.00,
            'created_by' => 1, // El ID de usuario Admin
        ]);
        Proyecto::create([
            'nombre' => 'Aplicación Móvil',
            'fecha_inicio' => '2024-03-01',
            'estado' => 'Completado',
            'responsable' => 'Admin',
            'monto' => 350000.00,
            'created_by' => 2, // El ID de usuario Juan Pérez
        ]);
    }
}
