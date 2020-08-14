<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $table = 'solicitante';

    protected $fillable = ['SOLIC_Nombre', 'semana_labor', 'dia_labor', 'hora_inicial', 'hora_final'];

    public $timestamps = false;
}
