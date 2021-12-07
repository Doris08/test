<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    //nombre tabla
    protected $table='establecimientos';

    //llave primaria
    protected $primaryKey='id';

    //atributos de tabla
    protected $fillable = ['nombre'];

    public $timestamps = true;

    //funciones de relación con otras tablas
    public function medicos(){
    		return $this->hasMany(Medico::class,'id_est','id');
    }
    public function recetas(){
        return $this->hasMany(Receta::class,'id');
    }

}
