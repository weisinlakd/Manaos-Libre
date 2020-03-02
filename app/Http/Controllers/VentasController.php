<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmpresaEnvio;
use App\MetodoEnvio;

class VentasController extends Controller
{
    //

    public function data() {

        $metodosEnvio = MetodoEnvio::where('estado', '=', 1)->get();

        return view('checkout', compact('metodosEnvio'));
    }

    public function pagar(Request $req) {

        if(($req['cc-selected'] && $req['tb-selected']) 
            || ($req['cc-selected'] && $req['pf-selected']) 
            || ($req['pf-selected'] && $req['tb-selected']) 
        ) {  //Chequeo que solo un tipo de pago este seleccionado
            return redirect()->back();
        }

        dd($req);
    }
}
