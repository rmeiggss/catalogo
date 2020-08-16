<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $table = 'solicitante';

    protected $fillable = ['nombre','ruc','direccion', 'telefono', 'email'];

    //public $timestamps = false;

}
