@extends('layouts/detalle')

@section('php')
    
    @if ($producto != false)
        {{$titulo = $producto->name}}
        {{$idProducto = $producto->id}}
        {{$valoracion = $producto->valoracion}}
        {{$valoracion = floor($valoracion/2)}}
    <?php 
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fechaActual = date_create(null);
        
        $fechaPubli = date_create($producto->fecha);
        
        $dateDiff = date_diff($fechaActual, $fechaPubli);

        // dd($dateDiff);
        
    ?>
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
    
    hr.solid {
        border-top: 2px solid #999;
        display: block;
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
                    @if ($producto)
                        <i class="fa fa-clock-o"></i>
                        {{-- <span class="text-muted">Publicado el {{date('d/m/Y', strtotime($producto->fecha))}}</span> --}}
                        @switch(true)
                            @case($dateDiff->y != 0)
                                    <span class="text-muted">Publicado hace {{$dateDiff->y}} años.</span>
                                @break
                            @case($dateDiff->m != 0)
                                    <span class="text-muted">Publicado hace {{$dateDiff->m}} meses.</span>
                                @break
                            @case($dateDiff->d != 0)
                                    <span class="text-muted">Publicado hace {{$dateDiff->d}} días.</span>
                                @break
                            @case($dateDiff->h != 0)
                                    <span class="text-muted">Publicado hace {{$dateDiff->h}} horas.</span>
                                @break
                            @case($dateDiff->i != 0)
                                    <span class="text-muted">Publicado hace {{$dateDiff->i}} minutos.</span>
                                @break
                            @default
                                <span class="text-muted">Publicado hace pocos segundos.</span>
                        @endswitch
                        {{-- <span class="text-muted">Publicado hace {{$dateDiff->d}} días.</span> --}}
                    @endif
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
                        @if($producto->fotos->isEmpty())
                            <div class="d-block d-md-none">
                                <img src="../img/placeholder-home.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="d-none d-md-block d-xl-block">
                                <img src="../img/placeholder-home.jpg" class="d-block w-100 " alt="...">
                            </div>
                        @endif
                        
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
        
        
        <h4><i class="icon ion-md-pin"></i> {{$producto->ciudad->nombre}}</h4>
        <h2>$ {{$producto->precio}}</h2>
        @if ($producto->valoracion)
            
        <h2>valoración: {{$producto->valoracion}}/10</h2>
        @endif

        @if ($producto->is_usado) 
            <h4 style="color: red">Usado!</h4> 
                @if ($producto->meses_uso % 2 === 0 && ($producto->meses_uso / 2 > 1))
                <p><i class="fa fa-clock-o"></i> Tiempo de uso : <span style="color: red">{{$producto->meses_uso/12}} Año(s)</span></p>
                @else
                    <p>Tiempo de uso : <span style="color: green">{{$producto->meses_uso}} Meses</span></p>
                @endif
            @switch($producto->estado_uso)
                @case(1)
                    <p>Estado: <span style="color: forestgreen"> Semi nuevo. </span></p> 
                    @break
                @case(2)
                    <p>Estado: <span style="color: green"> Uso Regular. </span></p>
                    @break
                @case(3)
                    <p>Estado: <span style="color: yellow"> Uso Intenso. </span></p>
                    @break
                @case(4)
                   <p>Estado: <span style="color: orange"> Daños Anormales por uso. </span></p>
                    @break
                @case(5)
                    <p>Estado: <span style="color: red"> Apenas Funcional. </span></p>
                    @break
                @case(6)
                    <p>Estado: <span style="color: darkred"> Venta como partes de repuesto. </span></p>
                    @break
                @default
                    
            @endswitch
        @endif
            <p>Vendedor: <a href="/perfil/{{$producto->usuario->id}}">{{ $producto->usuario->name}} </a>
            <br>(para más información comprar el producto)</p>
        <br>
        <a class="btn btn-primary" href="/add-to-cart/{{$producto->id}}" role="button">Agregar al Carrito</a>
        {{-- </div> --}}
            {{-- </div> --}}
            
            {{-- </div> --}}
        
            {{-- </div> --}}
            {{-- </div> --}}
    </div>
            
    
    
    
    <div class="row col-12 container">
        <div class="col-12 xs-3 card-body">
            <p>
                <h2>Descripcion del producto: </h2>
                <hr class="solid">
                {{$producto->descripcion}}
            </p>
            <hr class="solid">
        </div>

        <hr class="solid">

        {{-- MÁS PRODUCTOS --}}
        @isset($productos)
            
        <?php
        $id = 1;
        $subtitulo = "Más de ".$producto->usuario->name." <i class='fa fa-angle-right'></i> ";
        // $productos = [$producto, $producto , $producto,$producto,$producto];
        $notHome = true;
        ?>
        <div class="row col-12 p-3 text-center m-0">
            @include('inserts.slider-4-productos')
            
        </div>
        @endisset
        
    @if ($producto->comentarios)
        <div class="col-12 xs-3">
            <hr class="solid">
            <div class="comments-container">
                <br>
                <h1>Comentarios ({{count($producto->comentarios)}})</h1>
                
                <ul id="comments-list" class="comments-list">
                    
                    @foreach ($producto->comentarios as $comentario) 
                    <?php 
                        $foto =  '../img/user.png'; //FALTA VALIDAR LOGICA CUANDO HAYA USUARIOS
                        $nombre = isset($comentario->apellido) ? $comentario->name." ".$comentario->apellido : $comentario->name;
                        
                        // $fechaActual = localtime(time());
                        $fechaActual = date_create(null);
                        // dd($fechaActual);
                        $fechaComentario = date_create($comentario->created_at);
                        
                        $dateDiff = date_diff($fechaActual, $fechaComentario);

        // dd($dateDiff);
    
                        ?>
                        <li>
                            <div class="comment-main-level col-xs-4">
                                <!-- Avatar -->
                                <div class="comment-avatar"><img src="<?=$foto?>" alt=""></div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                    @if ($producto->usuario->id == $comentario->usuario->id)
                                        <h6 class="comment-name by-author">
                                    @else
                                        <h6 class="comment-name">
                                    @endif
                                            <a href="/perfil/{{$comentario->usuario->id}}">{{$comentario->usuario->name}}</a>
                                        </h6>
                                    <i class="fa fa-clock-o"></i>
                                    @switch(true)
                                        @case($dateDiff->y != 0)
                                                <span class="text-muted">Publicado hace {{$dateDiff->y}} años.</span>
                                            @break
                                        @case($dateDiff->m != 0)
                                                <span class="text-muted">Publicado hace {{$dateDiff->m}} meses.</span>
                                            @break
                                        @case($dateDiff->d != 0)
                                                <span class="text-muted">Publicado hace {{$dateDiff->d}} días.</span>
                                            @break
                                        @case($dateDiff->h != 0)
                                                <span class="text-muted">Publicado hace {{$dateDiff->h}} horas.</span>
                                            @break
                                        @case($dateDiff->i != 0)
                                                <span class="text-muted">Publicado hace {{$dateDiff->i}} minutos.</span>
                                            @break
                                        @default
                                            <span class="text-muted">Publicado hace pocos segundos.</span>
                                    @endswitch
                                    
                                        <i class="fa fa-reply"></i>                            
                                    </div>
                                <div class="comment-content  col-12 col-xs-12 ">
                                    <?=$comentario->comentario?>
                                </div>
                            </div>
                    @endforeach
                </div>
                <?php if (Auth::check()) :?>
                    <form method="post" action="/comentar">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$producto->id}}">
                            
                            <label for="comentario" class="fa-pull-right"> </label>
                            <textarea name="comentario" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Comentar</button>
                    </form>
                <?php else : ?> 
                <textarea name="comenntario" class="form-control" rows="3" disabled></textarea>
                    <a href="/login" class="pull-right"> Inicia sesión para comentar </a> 
                <?php endif ?>
            </div>
        </div>
    </div>
    @else 
    <div class="row col-12 container">
        <div class="col-12 xs-3">
            <hr class="solid">
            <div class="comments-container">
                <br>
                <h1>Comentarios (0)</h1>
                
                <ul id="comments-list" class="comments-list"> 
                </div>
        </div>
    </div>     
    @endif
    
        
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

