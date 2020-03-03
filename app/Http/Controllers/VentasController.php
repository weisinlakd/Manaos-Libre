<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmpresaEnvio;
use App\MetodoEnvio;
use App\MetodoPagoEspecifico;

class VentasController extends Controller
{
    //

    public function data() {

        $metodosEnvio = MetodoEnvio::where('estado', '=', 1)->get();

        return view('checkout', compact('metodosEnvio'));
    }

    public function pagar(Request $req) {

        // if(($req['cc-selected'] && $req['tb-selected']) 
        //     || ($req['cc-selected'] && $req['pf-selected']) 
        //     || ($req['pf-selected'] && $req['tb-selected']) 
        // ) {  //Chequeo que solo un tipo de pago este seleccionado
        //     return redirect()->back();
        // }

        if ($req['cc-selected']){

            $req->validate(
                ['cc-name' => 'required|min:6|max:50|string',
                'cc-number' => 'required|numeric|digits:16',
                'cc-cvv' => 'required|numeric|digits:3',
                'cc-expiration' => 'required|string|min:5|max:5'
                ],
                ['required' => 'El campo :attribute es obligatorio.',
                'min' => 'El campo :attribute debe tener :min caracteres como mínimo.',
                'max' => 'El campo :attribute debe tener :max caracteres como máximo.',
                'string' => 'El campo :attribute debe tener caracteres alfanuméricos.',
                'numeric' => 'El campo :attribute debe tener caracteres numéricos.',
                'digits' => 'El campo :attribute debe tener :digits caracteres.'
                ]);

            $tarjeta = new MetodoPagoEspecifico();
            $tarjeta->titular = $req['cc-name'];
            $tarjeta->numero_tarjeta = $req['cc-number'];
            $tarjeta->cvv = $req['cc-cvv'];

            $fecha = str_replace('/', '-', $req['cc-expiration']);
            $fecha = date_create_from_format('m-y', $fecha);

            $tarjeta->fecha_vencimiento = $fecha;
            $tarjeta->id_metodo_pago = 4;
            
            $tarjeta->save();
            dd($tarjeta);

        }

        if ($req['tb-selected']){

            $req->validate(
                ['tb-name' => 'required|min:6|max:50|string',
                'tb-cbu' => 'required|numeric|digits:22',
                ],
                ['required' => 'El campo :attribute es obligatorio.',
                'min' => 'El campo :attribute debe tener :min caracteres como mínimo.',
                'max' => 'El campo :attribute debe tener :max caracteres como máximo.',
                'string' => 'El campo :attribute debe tener caracteres alfanuméricos.',
                'numeric' => 'El campo :attribute debe tener caracteres numéricos.',
                'digits' => 'El campo :attribute debe tener :digits caracteres.'
                ]);

            // dd($req);
            dd('entro por transferencia ok');
        }

        if ($req['pf-selected']){

            
            $req->validate(
                ['pf-name' => 'required|min:6|max:50|string',
                
                ],
                ['required' => 'El campo :attribute es obligatorio.',
                'min' => 'El campo :attribute debe tener :min caracteres como mínimo.',
                'max' => 'El campo :attribute debe tener :max caracteres como máximo.',
                'string' => 'El campo :attribute debe tener caracteres alfanuméricos.',
                
                ]);

            // dd($req);
            dd('entro por pagoFacil ok');
        }

    }
}
