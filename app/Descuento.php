<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    protected $table = 'descuentos';

    protected $fillable = ['nombre_curso', 'cantidad_min', 'cantidad_max', 'costo', 'descuento', 'id_curso'];

    public $timestamps = false;

    public function curso()
    {
        return $this->belongsTo('App\Producto');
    }
}
