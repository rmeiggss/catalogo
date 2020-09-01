<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $primaryKey = 'COTIP_Codigo';

    protected $table = 'cotizacion';

    protected $fillable = [
			'SOLIP_Codigo',
			'COTIP_Codigo',
	    'COTIC_Numero',
	    'USUA_Codigo',
	    'USUA_Codigo',
	    'COTIC_Igv',
	    'COTIC_Total',
	    'COTIC_Fecha',
	    'COTIC_Correo1',
	    'COTIC_Correo2',
	    'COTIC_Correo3',
	    'COTIC_Correo4',
	];

    public $timestamps = false;
}
