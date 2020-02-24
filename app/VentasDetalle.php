<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentasDetalle extends Venta
{
    //
    public $table = "ventas_detalle";
    public $timestamps  = false;
    public $guarded = [];

}
