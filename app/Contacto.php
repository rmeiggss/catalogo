<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'solicitante';

    protected $fillable = ['nombre_contacto', 'email_contacto', 'celular_contacto', 'user_id'];

    public $timestamps = false;
}
