<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre', 'fecha_inicio', 'estado', 'responsable', 'monto', 'created_by'
    ];

    // Indicar que la tabla no tiene la propiedad timestamps
    public $timestamps = true;

    // Relación con el modelo Usuario (un proyecto tiene un usuario que lo creó)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'created_by');
    }
}
