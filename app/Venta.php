<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    public $table = "ventas";
    public $timestamps  = false;
    public $guarded = [];

}
