<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'rol';

    protected $fillable = ['ROL_Descripcion'];

    public $timestamps = false;
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
