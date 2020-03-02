<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Ciudad
{
    //
    public $table = "direcciones";
    public $timestamps  = false;
    public $guarded = [];

    public function ciudad () {
        return $this->belongsTo('App\Ciudad', 'ciudad_id');
    }
}
