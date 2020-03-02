<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmpresaEnvio;
use App\MetodoEnvio;

class VentasController extends Controller
{
    //

    public function data() {

        $metodosEnvio = MetodoEnvio::where('estado', '=', 1)->orderBy('name')->get();

        return view('checkout', compact('metodosEnvio'));
    }
}
