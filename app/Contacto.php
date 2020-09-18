<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $primaryKey = 'id_contacto';

    protected $table = 'contacto';

    protected $fillable = ['SOLIP_Codigo','nombre_contacto', 'email_contacto', 'celular_contacto'];

    public $timestamps = false;
}
