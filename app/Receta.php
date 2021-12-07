<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //nombre de la tabla
    protected $table='recetas';
    protected $primaryKey='id';

    //atributos de la tabla
    protected $fillable = ['codigo','id_est','id_paciente','id_medico'];

    public $timestamps = true;

    //funciones de relación con otras tablas
    public function establecimiento(){
        return $this->belongsTo(Establecimiento::class, 'id_est','id');
    }
    public function paciente(){
        return $this->belongsTo(Establecimiento::class, 'id_paciente','id');
    }
    public function medico(){
        return $this->belongsTo(Establecimiento::class, 'id_medico','id');
    }

}
