<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        Usuario::create([
            'nombre' => 'Admin',
            'correo' => 'admin@techsolutions.com',
            'clave' => 'admin123',
        ]);
        Usuario::create([
            'nombre' => 'Juan Pérez',
            'correo' => 'juan@techsolutions.com',
            'clave' => 'juan123',
        ]);
    }
}
