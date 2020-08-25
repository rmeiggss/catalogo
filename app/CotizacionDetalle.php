<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CotizacionDetalle extends Model
{
    protected $primaryKey = 'CODEP_Codigo';
    
    protected $table = 'cotizacion_detalle';
    
    protected $fillable = ['CODEC_NombreEquipo', 'CODEC_Descripcion', 'CODEC_Fabricante', 'CODEC_Url', 'CODEC_Cantidad','CODEC_SubTotal','CODEC_PrecioUnitario','COTIP_Codigo'];

    public $timestamps = false;
}
