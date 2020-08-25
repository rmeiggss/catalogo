<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioCurso extends Model
{
    protected $table = 'horario_cursos';

    protected $fillable = ['nombre_curso', 'fecha_inicial', 'hora_inicio', 'hora_final'];

    public $timestamps = false;
}
