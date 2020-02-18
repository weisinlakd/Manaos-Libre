<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    public $table = "usuarios";
    public $timestamps  = false;
    public $guarded = [];
}
