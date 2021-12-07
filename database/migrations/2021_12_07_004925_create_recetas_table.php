<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            //llave foranea a tabla establecimientos
            $table->unsignedBigInteger('id_est');
            $table->foreign('id_est')->references('id')->on('establecimientos');
            //llave foranea a tabla paciente
            $table->unsignedBigInteger('id_paciente');
            $table->foreign('id_paciente')->references('id')->on('pacientes');
            //llave foranea a tabla medico
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id')->on('medicos');
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
        Schema::dropIfExists('recetas');
    }
}
