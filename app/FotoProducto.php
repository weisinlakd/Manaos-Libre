<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoProducto extends Model
{
    //
    public $table = "fotos_productos";
    public $timestamps  = false;
    public $guarded = [];

    public function producto () {
        return $this->belongsTo('App\Producto', 'id_producto');
    }
}
