<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoProducto extends Model
{
    //
    public $table = "fotos_producto";
    public $timestamps  = false;
    public $guarded = [];
}
