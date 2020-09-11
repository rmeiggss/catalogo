<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
    	'nombre_eq',
    	'descripcion_eq',
    	'cantidad_eq',
    	'fabricante_eq',
    	'descrip_tec_eq',
    	'url_tec_eq',
    	'arch_descrip_eq',
    	'estado_tec_eq',
    ];

    public $timestamps = false;
}
