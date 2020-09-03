<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
	public $timestamps = false;

	protected $primaryKey =  'INSTP_Codigo';

    protected $table = 'instructor';

    protected $fillable = ['nombre', 'celular', 'email'];
}
