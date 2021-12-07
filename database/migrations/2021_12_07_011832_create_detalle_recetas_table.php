<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_recetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('catidad');
            $table->string('dosis');
            $table->string('indicaciones');
            //llave foranea a tabla receta
            $table->unsignedBigInteger('id_receta');
            $table->foreign('id_receta')->references('id')->on('recetas');   
            //llave foranea a tabla medicamentos
            $table->unsignedBigInteger('id_medicamento');
            $table->foreign('id_medicamento')->references('id')->on('medicamentos');        
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
        Schema::dropIfExists('detalle_recetas');
    }
}
