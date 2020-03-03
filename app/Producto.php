<?php

namespace App;

use Hamcrest\Arrays\IsArray;
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

    public function usuario () {
        return $this->belongsTo('App\Usuario', 'id_usuario');
    }

    public function valoracion() {

        $valoraciones = $this->valoraciones();
        if (is_array($valoraciones)){

            for ($i=0; $i < count($valoraciones); $i++) { 
                # code...
                $valoracion += $valoraciones[$i];
            }
            
            return $valoracion / $i;
        } else return 0; 
    }

    public function vendido () {
        return $this->hasMany('App\VentasDetalle', 'id_producto');
    }
}
