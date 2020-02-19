<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public $table = "productos";
    public $timestamps  = false;
    public $guarded = [];

    public function fotos () {
        return $this->hasMany('App\FotoProducto', 'id_producto');
    }

    public function comentarios () {
        return $this->hasMany('App\Comentario', 'id_producto');
    }

    public function valoraciones () {
        return $this->hasMany('App\Valoracion', 'id_producto');
    }

    public function ciudad () {
        return $this->belongsTo('App\Ciudad', 'ciudad_id');
    }

    public function categoria () {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }
}
