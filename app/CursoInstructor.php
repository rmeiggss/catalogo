<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoInstructor extends Model
{

   protected $primaryKey = 'id_curso_instructor';

   protected $table = 'curso_instructor';

   protected $fillable = ['INSTP_Codigo','id_curso'];

   public $timestamps = null;

}


