<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ensayo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'id'
    	'nombre_eq',
    	'descripcion_eq',
        'fabricante_eq',
        'descrip_tec_eq',
        'url_tec_eq',
        'costo',
        'estado_tec_eq',
        'cantidad_eq',
    ];

}
