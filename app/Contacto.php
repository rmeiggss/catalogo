<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';

    protected $fillable = ['nombre','email','telefono'];

    //public $timestamps = false;
}
