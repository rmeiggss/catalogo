<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = 'instructor';

    protected $fillable = ['nombre', 'celular', 'email'];

    public $timestamps = false;
}
