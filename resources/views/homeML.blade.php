@extends('layouts/default')

@section('php')

    <?php $producto = false;
    $titulo = 'Home';
    ?>
@endsection

@section('style')
<style>
    .carousel-control-prev.hola {
    left: -90px;
    }
    .carousel-control-next.hola {
    right: -90px;
    }

    @media screen and (max-width: 600px) {
      .carousel-control-prev.hola {
      left: -27px;
      }
      .carousel-control-next.hola {
      right: -27px;
      }
    }

    .importante {
      color: black;
    }

    .img-home {
      min-width: 12em;
      max-width: 12em;
      min-height: 12em;
      max-height: 12em;
    }

  </style>
@endsection

@section('slider-home')
    @include('inserts.slider-home')
@endsection

@section('content')
<div class="row col-12 p-3 text-center m-0"><!-- Informacion General -->
        
    <br>

     
      <?php
        $id = 1;
        $subtitulo = "Más Votados";
        $productos = $masVotados;
      ?>
      @include('inserts.slider-4-productos')
    

      <br>
    
    
      <?php
        $id = 2;
        $subtitulo = "Más Baratos";
        $ofertas = true;
        $productos = $masBaratos;
      ?>
      @include('inserts.slider-4-productos')


  </div><!-- (Fin)  Informacion General -->
  <br>
@endsection