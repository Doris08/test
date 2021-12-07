<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleReceta extends Model
{
    //nombre tabla
    protected $table='detalle_recetas';

    //llave primaria
    protected $primaryKey='id';

    //atributos de tabla
    protected $fillable = ['catidad ','dosis','indicaciones','id_receta','id_medicamento'];

    public $timestamps = true;

    //funciones de relación con otras tablas
    public function receta(){
        return $this->belongsTo(Receta::class, 'id_receta','id');
    }
    public function detalleReceta(){
        return $this->hasMany(Medicamento::class,'id_medicamento','id');
    }
}
