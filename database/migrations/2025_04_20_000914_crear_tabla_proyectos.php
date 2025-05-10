<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_inicio');
            $table->string('estado'); 
            $table->string('responsable');
            $table->decimal('monto', 10, 2);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     *@return void 
     */
    public function down()
    {
        Schema::dropIfExists('proyectos'); 
    }
};
