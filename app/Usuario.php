<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //

    public $table = "usuarios";
    public $timestamps  = false;
    public $guarded = [];

    public function productos () {
        return $this->hasMany('App\Producto', 'id_usuario');
    }

    public function compras () {
        return $this->hasMany('App\Ventas', 'id_comprador');
    }

    // public function ventas () {
    //     return $this->hasMany('App\VentasDetalle', 'id_comprador');
    // }
    
}
