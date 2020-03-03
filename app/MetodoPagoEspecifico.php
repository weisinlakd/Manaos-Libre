<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPagoEspecifico extends MetodoPago
{
    //

    public $table = "metodo_pago_especifico";
    public $timestamps  = false;
    public $guarded = [];

    public function metodoPago () {
        return $this->belongsTo('App\MetodoPago', 'id_metodo_pago');
    }
}
