<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
   protected $primaryKey = 'id_curso';

   protected $table = 'curso';

   protected $fillable = ['CURSOC_Nombre','CURSOC_Costo','CURSOC_Descripcion'];

   public $timestamps = false;
}
