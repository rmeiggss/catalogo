<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioCurso extends Model
{
    protected $table = 'horario_cursos';

    protected $fillable = ['nombre_curso', 'fecha_inicial', 'fecha_final', 'hora_inicial', 'hora_final'];

    public $timestamps = false;
}
