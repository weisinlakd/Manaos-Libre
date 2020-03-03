@extends('layouts.default')

@section('php')
<?php 
    $producto = true;
    $titulo = 'Mis Ventas';
    if ($ventas != null){

        $tituloPag = 'Mis Ventas ('.count($ventas).")";
    } else {
        $tituloPag = 'No realizaste ninguna venta!';
    }

    
?>    
 
@endsection




@section('content')
    @include('inserts.anuncioYtitulo')
    <br>
    @if ($ventas != null)
        <div class="container">
                
            <div class="row">
                @foreach ($ventas as $wea)
                    <div class="card col-6">
                        @foreach($wea->vendido as $ventaDetalle)
                            <?php $venta = $ventaDetalle->venta; ?>
                        @endforeach
                        <ul>
                            <div class="card-body">
                                <li class="border-bottom"><h2 class="pull-right">Orden N° {{$venta->id}}</h2></li>
                                <li> <h3>Vendido a <a href="/perfil/{{$venta->comprador->id}}">{{$venta->comprador->name}}</a></h3></li>
                                <li class="border-bottom">Precio total: <h3>${{$venta->precio}}</h3></li>
                                <li class="border-bottom">Fecha: <h3>{{$venta->fecha_venta}}</h3></li>
                                <li class="border-bottom">Dirección de Envío: <h3>{{$venta->direccion->direccion}}, {{$venta->direccion->ciudad->nombre}}, {{$venta->direccion->ciudad->provincia}}</h3></li>
                                <li class="border-bottom">Método de pago: 
                                    <h3>
                                        @if ($venta->metodoPagoEspecifico->cvv)
                                        Tarjeta N° {{$venta->metodoPagoEspecifico->numero_tarjeta}}.
                                        @elseif ($venta->metodoPagoEspecifico->cbu)
                                        Transferencia Bancaria 
                                        @else 
                                        Pago Fácil
                                        @endif
                                    </h3>
                                </li>
                                
                                <li class="border-bottom">Método de Envío: <h3>{{$venta->metodoEnvio->name}} a través de {{$venta->metodoEnvio->empresa->name}}.</h3></li>
                                {{-- <li class="border-bottom"><h3>Productos:</h3></li> --}}
                            </div>
                                <ul>
                                    
                                    @foreach ($venta->ventasDetalle as $ventasDetalle)
                                    <?php $producto = $ventasDetalle->producto; 
                                            $compras = true; 
                                    ?>
                                    <div>
                                        @if ($producto->usuario->id == Auth::user()->id)
                                            @include('inserts.producto-home')  
                                        @endif                            
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
        {{-- <div class="pagination justify-content-center">
            {{$ventas->links()}}
        </div> --}}
    @endif
@endsection

@section('script')

@endsection