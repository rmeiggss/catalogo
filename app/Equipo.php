<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'equipos';

    protected $fillable = [
    	'Nombre_Equipo',
    	'Descripcion_Equipo',
    	'Cantidad',
    	'Fabricante',
    	'Descripcion_Ficha_Tecnica_Equipo',
    	'URL_Ficha_Tecnica_Equipo',
    	'Archivo_Descripcion_Equipo',
    	'Estado_Ficha_Tecnica_Equipo',
    	'Costo',
    	'equipos_id',
    ];

    public $timestamps = false;
}
