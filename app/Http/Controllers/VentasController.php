<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmpresaEnvio;
use App\MetodoEnvio;
use App\MetodoPagoEspecifico;
use App\Venta;
use App\VentasDetalle;
use Illuminate\Support\Facades\Auth;

class VentasController extends Controller
{
    //

    public function data() {

        $metodosEnvio = MetodoEnvio::where('estado', '=', 1)->get();

        return view('checkout', compact('metodosEnvio'));
    }

    public function pagar(Request $req) {

        

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
                ]
            );

            $metodo = new MetodoPagoEspecifico();
            $metodo->titular = $req['cc-name'];
            $metodo->numero_tarjeta = $req['cc-number'];
            $metodo->cvv = $req['cc-cvv'];

            $fecha = str_replace('/', '-', $req['cc-expiration']);
            $fecha = date_create_from_format('m-y', $fecha);
            $fechaActual = date_create(null);

            $dateDiff = date_diff($fechaActual, $fecha);
            // dd($dateDiff);
            if ($dateDiff->invert == 1){
                return redirect()->back();
            }

            $metodo->fecha_vencimiento = $fecha;
            $metodo->id_metodo_pago = 4;
            

            // SACAR COMENTARIO DESPUES DE TERMINAR PRIMERA VENTA
            try {
                    
                $metodo->save();
            } catch (\Throwable $th) {
                throw $th;
            } 
            // dd($metodo);

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
                ]
            );

            $metodo = new MetodoPagoEspecifico();
            $metodo->titular = $req['tb-name'];
            $metodo->cbu = $req['tb-cbu'];
            $metodo->id_metodo_pago = 5;

            try {
                
                $metodo->save();
            } catch (\Throwable $th) {
                throw $th;
            }

        }

        if ($req['pf-selected']){

            
            $req->validate(
                ['pf-name' => 'required|min:6|max:50|string',
                
                ],
                ['required' => 'El campo :attribute es obligatorio.',
                'min' => 'El campo :attribute debe tener :min caracteres como mínimo.',
                'max' => 'El campo :attribute debe tener :max caracteres como máximo.',
                'string' => 'El campo :attribute debe tener caracteres alfanuméricos.',
                
                ]
            );

                $metodo = new MetodoPagoEspecifico();
                $metodo->titular = $req['pf-name'];
                $metodo->id_metodo_pago = 1;
                try {
                    
                    $metodo->save();
                } catch (\Throwable $th) {
                    throw $th;
                }
        }


        //ACEPTADO EL PAGO SE PROCEDE A LA VENTA

        $venta = new Venta();
        $venta->id_comprador = Auth::user()->id;
        $venta->id_direccion_envio = Auth::user()->direccion->id;
        $venta->id_metodo_envio = $req['metodo_envio'];
        $venta->id_metodo_pago_especifico = $metodo->id;

        $precio = 0;
        foreach (session('cart') as $id => $producto) {
            $precio += ($producto['precio']* $producto['quantity']);
        }

        $venta->precio = $precio;

        //SACAR COMENTARIO AL TERMINAR VENTA_DETALLE
        $venta->save(); 
        
        
        foreach (session('cart') as $id => $producto) {
            $ventaDetalle = new VentasDetalle();
            $ventaDetalle->id_producto = $id;
            $ventaDetalle->precio_unitario = $producto['precio'];
            $ventaDetalle->cantidad = $producto['quantity'];
            $ventaDetalle->id_venta = $venta->id;

            
            // dd($ventaDetalle);
            $ventaDetalle->save();
        }
        
        dd($venta);
    }
}
