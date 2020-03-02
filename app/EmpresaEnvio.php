<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaEnvio extends Model
{
    //
    public $table = "empresas_envio";
    public $timestamps  = false;
    public $guarded = [];


    public function metodosEnvio () {
        return $this->hasMany('App\MetodoEnvio', 'id_empresa');
    }

    public function direccion () {
        return $this->belongsTo('App\Direccion', 'id_direccion');
    }
}
