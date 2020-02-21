<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    public $table = "comentarios";
    public $timestamps  = false;
    public $guarded = [];

    public function producto () {
        return $this->belongsTo('App\Producto', 'id_producto');
    }

    public function usuario () {
        return $this->belongsTo('App\usuario', 'id_usuario');
    }
}
