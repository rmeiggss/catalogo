<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $primaryKey = 'COTIP_Codigo';
    
    protected $table = 'cotizacion';
    
    protected $fillable = ['SOLIP_Codigo', 'COTIC_Numero', 'USUA_Codigo', 'USUA_Codigo', 'COTIC_Igv','COTIC_Total','COTIC_Fecha'];

    public $timestamps = false;
}
