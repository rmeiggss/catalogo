<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSolicitante extends Model
{
    protected $primaryKey = 'TIPSOLIP_Codigo';

    protected $table = 'tiposolicitante';

    protected $fillable = ['TIPSOLIC_Descripcion'];

    public $timestamps = false;
}
