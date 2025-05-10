<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateResponsableColumnInProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            // Si la columna ya existe, solo modificamos el valor por defecto
            $table->string('responsable')->default('No asignado')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            // Si es necesario revertir la columna, lo hacemos aquí
            $table->dropColumn('responsable');
        });
    }
}
