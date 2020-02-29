@extends('layouts.default')

@section('php')
<?php 
$producto = false;

$titulo = "Perfil de ".$usuario->name;
// $fecha = $usuario->fecha_creacion->format('d/m/Y');
$fecha = date('d/m/Y', strtotime($usuario->fecha_creacion));
// dd($fecha);
 
$ciudades = [];
?>
@endsection

<style>
    .redondo {
        border-radius: 50%;
    }
</style>

@section('content')
<br>
@if ($usuario->estado == 0)
    <h1>No existe usuario con ese perfil!</h1>
@else
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10 page-breadcrumb">
                <h2 style="border-bottom: 2px solid #d0d7db; padding-bottom: 15px;  font-size: 48px;">{{$usuario->name}} {{$usuario->apellido ?? ''}}<span style="color:#b0bcc2">.</span></h2>
                
            </div>
            <div class="col-sm-2">
                <!-- <a href="/users" class="pull-right"> -->
                <div class="row">
                    <div class="col-2"></div>
                    @if ($usuario->foto != 'error')
                        <img title="profile image" class="img-circle img-responsive col-12 redondo" src="/storage/profile/{{$usuario->foto}}">
                    @else
                        <img title="profile image" class="img-circle img-responsive col-12" src="../img/user.png">
                    @endif 
                    <div class="col-2"></div>
                </div>
                <br>
                <!-- </a> -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <!--left col-->

                <ul class="list-group">
                    <li class="list-group-item text-muted">Perfil</li>
                    <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong>Perfil creado</strong></span> <?=$fecha?></li>
                    <!-- <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong>Última conexión</strong></span> 09/12/2018</li> -->
                    <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong>Nombre completo</strong></span> <?php if ($usuario->apellido){ echo $usuario->name.' '.$usuario->apellido; } else echo $usuario->name?></li>
                    
                        

                </ul>

                <!-- <div class="panel panel-default">
                    <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                    <div class="panel-body"><a href="">https://hola.com</a></div>
                </div> -->
                <br>

                <ul class="list-group">
                    <li class="list-group-item text-muted">Actividad <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Productos en Venta</strong></span> 
                    @if($usuario->productos->isEmpty())
                        0
                    @else
                        {{$usuario->productos->count()}}
                    @endif
                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Valoraciones</strong></span>
                    @if($usuario->valoraciones->isEmpty())
                        0
                    @else
                        {{$usuario->valoraciones->count()}}
                    @endif
                </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Comentarios</strong></span> {{$usuario->comentarios->count() ?? 0}}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Ratings a sus productos</strong></span> 
                        
                        0
                    </li>
                </ul>

                <!-- <div class="panel panel-default">
                    <div class="panel-heading">Social Media</div>
                    <div class="panel-body">
                        <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
                    </div>
                </div> -->

            </div>
            <!--/col-3-->
            <div class="col-sm-9">

                <ul class="nav navbar nav-tabs" id="myTab">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menú
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" data-toggle="tab" href="#home">Publicaciones de {{$usuario->name}} </a>
                        <a class="dropdown-item" data-toggle="tab" href="#messages">Comentarios en las publicaciones de {{$usuario->name}}</a>
                        
                        </div>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Fecha de Creación</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Categoría</th>
                                        <th>Ciudad</th>
                                        <th>Valoración</th>
                                        <th>Ver</th>
                                    </tr>
                                </thead>
                                <tbody id="items">
                                    <?php 
                                    if ($usuario->productos->isEmpty()){
                                        echo "<tr>
                                        <td>$usuario->name no tiene productos publicados!</td>";

                                    } else {
                                        foreach ($usuario->productos as $producto) : ?>
                                        <tr>
                                            <td>{{date('d/m/Y', strtotime($producto->fecha))}}</td>
                                            <td><?=$producto->name?></td>
                                            <td>$<?=$producto->precio?></td>
                                            <td>{{$producto->categoria->name}}
                                            </td>
                                            <td>{{$producto->ciudad->nombre}}
                                            </td>
                                            <td><?=round($producto->valoracion,1, PHP_ROUND_HALF_DOWN)?> / 10</td>
                                        <td><a href="/producto/{{$producto->id}}" class="btn btn-primary">Ver</a></td>
                                        </tr>
                                        <?php endforeach; }?>
                                    
                                    
                                </tbody>
                            </table>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <ul class="pagination" id="myPager"></ul>
                                </div>
                            </div>
                        </div>
                        <!--/table-resp-->

                        <hr>

                    </div>
                    <!--/tab-pane-->
                    
                    
                    
                    <div class="tab-pane" id="messages">

                        <h2></h2>

                        <ul class="list-group">
                            <li class="list-group-item text-muted">Últimos comentarios en Publicaciones de {{$usuario->name}}</li>
                            
                            @if ($usuario->productos->isEmpty()){
                                <li class="list-group-item text-center">{{$usuario->name}} no tiene productos publicados!</li>

                            @else
                                {{-- @foreach ($usuario->productos->comentarios as $comentario) --}}
                            @foreach ($usuario->productos as $producto)

                                @if ($producto->comentarios->isEmpty())
                                <?php continue?>
                                @else 
                                    @foreach ($producto->comentarios as $comentario)
                                    
                                    <li class="list-group-item text-right"><a href="/producto/<?=$comentario->id_producto?>" class="pull-left"><?=$comentario->comentario?></a> <a href="/perfil/{{$comentario->id_usuario}}"> {{$comentario->usuario->name}}</a></li>
                            
                                    @endforeach
                                @endif

                            @endforeach    
                                
                                {{-- @endforeach --}}
                            @endif
                        </ul>
                        <br>
                    </div>
                    <!--/tab-pane-->
                    

                </div>
                <!--/tab-pane-->
            </div>
            <!--/tab-content-->

        </div>
        <!--/col-9-->
    </div>
@endif
<br>
@endsection