<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //nombre tabla
    protected $table='pacientes';

    //llave primaria
    protected $primaryKey='id';

    //atributos de tabla
    protected $fillable = ['nombres','apellidos','fecha_nacimiento'];

    public $timestamps = true;

    //funciones de relación con otras tablas
    public function recetas(){
        return $this->hasMany(Receta::class,'id');
    }
}
