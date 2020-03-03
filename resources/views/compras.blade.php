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
                    <div class="card col-6">

                        <ul>
                            <div class="card-body">
                                <li><h2 class="pull-right">Orden N° {{$compra->id}}</h2></li>
                                <li>Precio total: <h3>${{$compra->precio}}</h3></li>
                                <li>Fecha: <h3>{{$compra->fecha_venta}}</h3></li>
                                <li>Dirección de Envío: <h3>{{$compra->direccion->direccion}}, {{$compra->direccion->ciudad->nombre}}, {{$compra->direccion->ciudad->provincia}}</h3></li>
                                <li>Método de pago: 
                                    <h3>
                                        @if ($compra->metodoPagoEspecifico->cvv)
                                        Tarjeta con CVV {{$compra->metodoPagoEspecifico->cvv}}.
                                        @elseif ($compra->metodoPagoEspecifico->cbu)
                                        Transferencia Bancaria 
                                        @else 
                                        Pago Fácil
                                        @endif
                                    </h3>
                                </li>
                                
                                <li>Método de Envío: <h3>{{$compra->metodoEnvio->name}} a través de {{$compra->metodoEnvio->empresa->name}}.</h3></li>
                                <li>Productos:</li>
                            </div>
                                <ul>
                                    
                                    @foreach ($compra->ventasDetalle as $ventasDetalle)
                                    <?php $producto = $ventasDetalle->producto; 
                                            $compra = true; ?>
                                    <div>

                                        @include('inserts.producto-home')                              
                                    </div>
                                    @endforeach
                                    
                                </ul>
                        </ul>                  
                        
                    </div>
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

@section('script')

@endsection