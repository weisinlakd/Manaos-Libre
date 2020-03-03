<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentasDetalle extends Venta
{
    //
    public $table = "ventas_detalle";
    public $timestamps  = false;
    public $guarded = [];

    public function producto () {
        return $this->belongsTo('App\Producto', 'id_producto');
    }
}
