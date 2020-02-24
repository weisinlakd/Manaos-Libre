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
    
}
