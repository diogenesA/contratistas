<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratistas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Foto');
            $table->string('NombreCompleto');
            $table->string('FechaNacimiento');
            $table->string('Cedula');
            $table->string('Edad');
            $table->string('PerfilFormacion');
            $table->string('ExperienciaPublicoPrivado');
            $table->string('Celular');
            $table->string('Correo');
            $table->string('Direccion');
            $table->string('IBC');
            $table->string('Honorarios');
            $table->string('Diferencia');
            $table->string('Referidos');
            $table->string('Tecnica');
            $table->string('Participacion');
            $table->string('Redes');
            $table->string('Necesidad');
            $table->string('Indicador');
            $table->string('GrupoInternoTrabajo');
            $table->string('Observaciones');
            $table->string('Universidad');
            $table->string('EPS');
            $table->string('Pension');
            $table->string('ARL');
            $table->string('NumeroContrato');
            $table->string('Tiempo');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratistas');
    }
}
