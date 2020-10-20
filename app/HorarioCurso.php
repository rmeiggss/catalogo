<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioCurso extends Model
{
    protected $table = 'horario_apertura_curso';

    protected $fillable = ['nombre_curso', 'fecha_inicial', 'hora_inicial', 'hora_final'];

    public $timestamps = false;
}
