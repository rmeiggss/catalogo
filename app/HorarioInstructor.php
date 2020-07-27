<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioInstructor extends Model
{
    protected $table = 'horario_instructors';

    protected $fillable = ['nombre_instructor', 'semana_labor', 'dia_labor', 'hora_inicial', 'hora_final'];

    public $timestamps = false;
}
