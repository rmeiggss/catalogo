<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $primaryKey = 'id';
    
    protected $table = 'solicitante';

    protected $fillable = ['SOLIC_Nombre', 'SOLIC_Ruc', 'SOLIC_Direccion', 'SOLIC_Telefono', 'SOLIC_Email','SOLIC_FlagEstado','TIPSOLIP_Codigo','UBIGP_Codigo'];

    public $timestamps = false;

}
