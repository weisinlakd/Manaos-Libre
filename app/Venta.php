<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    public $table = "ventas";
    public $timestamps  = false;
    public $guarded = [];

    public function ventasDetalle () {
        return $this->hasMany('App\VentasDetalle', 'id_venta');
    }

    public function metodoPagoEspecifico () {
        return $this->belongsTo('App\MetodoPagoEspecifico', 'id_metodo_pago_especifico');
    }

    public function metodoEnvio () {
        return $this->belongsTo('App\MetodoEnvio', 'id_metodo_envio');
    }

    public function direccion () {
        return $this->belongsTo('App\Direccion', 'id_direccion_envio');
    }

    public function comprador () {
        return $this->belongsTo('App\Usuario', 'id_comprador');
    }
}
