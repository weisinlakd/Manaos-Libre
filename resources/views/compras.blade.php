@extends('layouts.default')

@section('php')
<?php 
    $producto = true;
    $titulo = 'Mis Compras';
    if ($compras != null){

        $tituloPag = 'Mis Compras ('.count($compras).")";
    } else {
        $tituloPag = 'No realizaste ninguna compra!';
    }

?>    
@endsection

@section('content')
    @include('inserts.anuncioYtitulo')
    <br>
    @if ($compras != null)
        <div class="container">
                
            <div class="row">
                @foreach ($compras as $compra)
                    <ul>
                        {{-- {{dd($compra->ventasDetalle)}} --}}
                        <li>Precio: {{$compra->precio}}</li>
                        <li>Fecha: {{$compra->fecha_venta}}</li>
                        <li>Dirección de Envío: {{$compra->direccion->direccion}}, {{$compra->direccion->ciudad->nombre}}, {{$compra->direccion->ciudad->provincia}}</li>
                        <li>Método de pago: 
                            @if ($compra->metodoPagoEspecifico->cvv)
                               Tarjeta con CVV {{$compra->metodoPagoEspecifico->cvv}}.
                            @elseif ($compra->metodoPagoEspecifico->cbu)
                                Transferencia Bancaria 
                            @else 
                                Pago Fácil
                            @endif
                        </li>
                        <li>Método de Envío: {{$compra->metodoEnvio->name}} a través de {{$compra->metodoEnvio->empresa->name}}.</li>
                        <ul>
                            Productos:
                            @foreach ($compra->ventasDetalle as $ventasDetalle)
                                {{$producto = $ventasDetalle->producto}}
                                    @include('inserts.producto')
                                
                            @endforeach
                            
                        </ul>
                    </ul>
                    

                @endforeach
            </div>
        </div>
        <br>
        {{-- <i class="icon ion-md-"></i> --}}
        <div class="pagination justify-content-center">
            {{$compras->links()}}
        </div>
    @endif
@endsection