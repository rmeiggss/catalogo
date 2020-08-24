<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'contacto';

    protected $fillable = ['nombre_contacto', 'email_contacto', 'celular_contacto'];

    public $timestamps = false;
}
