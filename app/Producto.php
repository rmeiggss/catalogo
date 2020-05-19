<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    
    protected $fillable = ['titulo','precio','categoria'];
    
    public $timestamps = false;
}
