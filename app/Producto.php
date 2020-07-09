<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
   // protected $primaryKey = 'CURSOP_Codigo';

   protected $table = 'curso';

    protected $fillable = ['CURSOC_Nombre','CURSOC_Costo','CURSOC_Descripcion'];

    public $timestamps = false;
}
