<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioCurso extends Model
{
    protected $table = 'horario_cursos';

    protected $fillable = ['nombre_curso', 'semana_labor', 'dia_labor', 'hora_inicial', 'hora_final'];

    public $timestamps = false;
}
