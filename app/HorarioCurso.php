<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioCurso extends Model
{
    protected $table = 'horario_apertura_curso';

    protected $fillable = ['Dia_Dictado', 'Hora_Inicio', 'Hora_Fin', 'id_curso','INSTP_Codigo'];

    public $timestamps = false;
}
