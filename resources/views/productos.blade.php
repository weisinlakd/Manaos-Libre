@extends('layouts.default')

@section('php')
    <?php $producto = false; 
    
    // $productos = [];
    if (isset($busqueda)) {
        $tituloPag = "Resultados de <span>'$busqueda'</span> : (".count($productos).")";
        $titulo = "$busqueda";
    } else {
        $tituloPag  = "Resultados (". count($productos) . "/$total)";
        $titulo = 'Productos';
    }
    ?>
@endsection

@section('ads')
    @include('inserts.anuncioYtitulo')
@endsection

@section('content')
    <div class="container">
            
        <div class="row">
        @foreach ($productos as $producto) 
            
            @include('inserts.producto')

            @empty($productos)
            <li>No hay Productos</li>
            @endempty

        @endforeach
        </div>
    </div>
    <br>
    {{-- <i class="icon ion-md-"></i> --}}
    <div class="pagination justify-content-center">
        {{$productos->links()}}
    </div>
@endsection