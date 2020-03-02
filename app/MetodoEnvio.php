<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoEnvio extends Model
{
    //

    public $table = "metodos_envio";
    public $timestamps  = false;
    public $guarded = [];

    public function empresa () {
        return $this->belongsTo('App\EmpresaEnvio', 'id_empresa');
    }
}
