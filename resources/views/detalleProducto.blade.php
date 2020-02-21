@extends('layouts/detalle')

@section('php')

    @if ($producto != null)
        {{$titulo = $producto->name}}
        {{$idProducto = $producto->id}}
        {{$valoracion = $producto->valoracion}}
        {{$valoracion = floor($valoracion/2)}}
    @else
        {{$titulo = '404 - No existe'}}
    @endif

    
@endsection
    {{-- borrar al hacer usuarios --}}
    <?php $usuarioLog = false?> 

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

@section('content')

<div class="container">
    <div class="row col-12 mx-0">
  
      <section class="page-add">
      <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-breadcrumb">
                    <h2><?=$titulo?><span>.</span></h2>
                </div>
    @if ($producto)
            <form action="#" method="post">
                
                <!-- cambios a las estrellas -->
                
                <p class="clasificacion">
                
                @include('inserts/ratings-detalle')
                
                </p>
                <?php if (isset($disabled)) :?>
                <?php $_POST = array();
                // die; ?>
                <br><br><input type="submit" value="ya votaste!" class="btn btn-outline-secondary" disabled>
                <?php elseif ($usuarioLog == false): ?>
                <br><br><input type="submit" value="ingresá para votar!" class="btn btn-outline-secondary" disabled>
                <?php else : ?> 
                <br><br><input type="submit" value="guardar" class="btn btn-outline-secondary">
                <?php  endif ?>
            </form>
  
        
            <div class="container mx-auto">
  
  
  
            <div class=" container  no-gutters col-xs-12 col-lg-9 float-lg-left mx-auto"><!-- Slider de Imagenes -->
                <div class="col-lg-6 col-xs-12 mx-auto">
                    <div id="homeCarousel" class="carousel slide xs-12" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#homeCarousel" data-slide-to="1"></li>
                            <li data-target="#homeCarousel" data-slide-to="2"></li>
                        </ol>
                    <div class="carousel-inner">

                        @foreach ($producto->fotos as $foto)
                        @if ($loop->first)
                            <div class="carousel-item active">
                            
                        @else
                            <div class="carousel-item">
                        @endif
                                <div class="d-block d-md-none">
                                    <img src="/storage/<?=$foto->nombre?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="d-none d-md-block d-xl-block">
                                    <img src="/storage/<?=$foto->nombre?>" class="d-block w-100 " alt="...">
                                </div>
                            </div>
                        @endforeach
                    
                    </div>
                    <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
    </div><!-- (Fin) Slider de Imagenes -->
    {{-- </div> --}}
    
    <div class="col-lg-3 col-xs-12 mx-auto mx-0 fluid float-lg-left">
        
        <h5>Descripcion del producto: <br> </h5>
                <h4>{{$producto->descripcion}}</h4>
                <h4><i class="icon ion-md-pin"></i> {{$producto->ciudad->nombre}}</h4>
            <h2>$ {{$producto->precio}}</h2>
            <h2>valoración: {{$producto->valoracion ?? '-'}}/10</h2>
            @if ($producto->is_usado) 
                <h4>Usado!</h4> 
                @endif
            <p>Vendedor: {{ $producto->usuario->name}} 
                <br>(para más información comprar el producto)</p>
            <br>
            <a class="btn btn-primary" href="#" role="button">Agregar al Carrito</a>
            {{-- </div> --}}
                {{-- </div> --}}
                
                {{-- </div> --}}
            
                {{-- </div> --}}
                {{-- </div> --}}
            </div>
            
            
    @if ($producto->comentarios)
    
    
    <div class="row col-12 container">
        <div class="col-12 xs-3">
            <div class="comments-container">
                <br>
                <h1>Comentarios ({{count($producto->comentarios)}})</h1>
                
                <ul id="comments-list" class="comments-list">
                    
                    @foreach ($producto->comentarios as $comentario) 
                    <?php 
                        $foto =  '../img/user.png'; //FALTA VALIDAR LOGICA CUANDO HAYA USUARIOS
                        $nombre = isset($comentario->apellido) ? $comentario->name." ".$comentario->apellido : $comentario->name
                        ?>
                        <li>
                            <div class="comment-main-level col-xs-4">
                                <!-- Avatar -->
                                <div class="comment-avatar"><img src="<?=$foto?>" alt=""></div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="#">{{$comentario->usuario->name}}</a></h6>
                                    <span>hace 20 minutos</span>
                                        <i class="fa fa-reply"></i>                            
                                    </div>
                                <div class="comment-content  col-12 col-xs-12 ">
                                    <?=$comentario->comentario?>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @else 
    <div class="row col-12 container">
        <div class="col-12 xs-3">
            <div class="comments-container">
                <br>
                <h1>Comentarios (0)</h1>
                
                <ul id="comments-list" class="comments-list"> 
                </div>
        </div>
    </div>     
    @endif
    <form action="/borrarPublicacion" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$producto->id}}">
        <input type="submit" value="Borrar Publicación">
        
    </form>
    <br>
    @endif    

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

