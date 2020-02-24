@extends('layouts.default')

@section('php')
<?php 
$producto = false;
$titulo = 'Mi Perfil ';
// $fecha = Auth::user()->fecha_creacion->format('d/m/Y');
$fecha = date('d/m/Y', strtotime(Auth::user()->fecha_creacion));
// dd($fecha);

// $ciudades = [];
?>
@endsection

@section('content')

<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10 page-breadcrumb">
            <h2 style="border-bottom: 2px solid #d0d7db; padding-bottom: 15px;  font-size: 48px;">Hola, {{Auth::user()->name}}<span style="color:#b0bcc2">.</span></h2>
            
          </div>
        <div class="col-sm-2">
            <!-- <a href="/users" class="pull-right"> -->
              <div class="row">
                <div class="col-2"></div>
                @if (Auth::user()->foto != 'error')
                    <img title="profile image" class="img-circle img-responsive col-12" src="{{Auth::user()->foto}}">
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
                        <strong>Nombre completo</strong></span> <?php if (Auth::user()->apellido){ echo Auth::user()->name.' '.Auth::user()->apellido; } else echo Auth::user()->name?></li>
                <li class="list-group-item text-right">
                    <span class="pull-left">
                        <strong><a style="color:black" href="cerrarSesion.php"> Cerrar Sesión</a></strong></span></li>

            </ul>

            <!-- <div class="panel panel-default">
                <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><a href="">https://hola.com</a></div>
            </div> -->
            <br>

            <ul class="list-group">
                <li class="list-group-item text-muted">Actividad <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Productos en Venta</strong></span> 
                @if(Auth::user()->productos->isEmpty())
                    0
                @else
                    {{Auth::user()->productos->count()}}
                @endif
            </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mis Valoraciones</strong></span>
                @if(Auth::user()->valoraciones->isEmpty())
                    0
                @else
                    {{Auth::user()->valoraciones->count()}}
                @endif
            </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Comentarios</strong></span> {{Auth::user()->comentarios->count() ?? 0}}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Ratings a mis productos</strong></span> 
                    
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
                      <a class="dropdown-item" data-toggle="tab" href="#home">Mis Productos </a>
                      <a class="dropdown-item" data-toggle="tab" href="#messages">Comentarios en Mis Publicaciones</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#settings">Editar Perfil</a>
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
                                if (Auth::user()->productos->isEmpty()){
                                    echo "<tr>
                                    <td>No tenés productos publicados!</td>";

                                } else {
                                    foreach (Auth::user()->productos as $producto) : ?>
                                    <tr>
                                        <td><?=$producto->fecha?></td>
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
                        <li class="list-group-item text-muted">Últimos comentarios en Mis Publicaciones</li>
                         
                        @if (Auth::user()->productos->isEmpty()){
                            <li class="list-group-item text-center">No tenés productos publicados!</li>

                        @else
                            {{-- @foreach (Auth::user()->productos->comentarios as $comentario) --}}
                        @foreach (Auth::user()->productos as $producto)

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
                <div class="tab-pane" id="settings">
                    <br>
                <h2>Editar Perfil</h2>
                    <hr>
                    <form class="form" action="/actualizarPerfil" method="post" id="registrationForm"
                        enctype="multipart/form-data" oninput='pasword_confirmation.setCustomValidity(pasword_confirmation.value != pass.value ? "Las contraseñas no coinciden." : "")'>
                        <div class="form-group">
                                
                            <div class="col-xs-6">
                                <label for="name">
                                    <h4>Nombre(s)</h4></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre(s)" title="enter your first name if any." value='{{old('name')}}'>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="apellido">
                                    <h4>Apellido(s)</h4></label>
                                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido(s)" title="enter your last name if any." value='{{old('apellido')}}'>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="telefono">
                                    <h4>Teléfono</h4></label>
                                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" title="enter your telefono number if any." value='{{old('telefono')}}''>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile">
                                    <h4>Mobile</h4></label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                            </div>
                        </div> -->
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value='{{old('email')}}' disabled>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-xs-6">
                            <label for="ciudad"><h4>Ciudad y Dirección</h4></label><br>
                            <select name="ciudad" id="ciudad"  class="js-example-basic-single" placeholder="buscá tu ciudad" value='{{old('email')}}'>
                            <?php foreach ($ciudades as $ciudad) : ?>
                            <option value="<?=$ciudad->id?>" name="ciudad_id" > <?=$ciudad->nombre?> </option> 
                            <?php endforeach ?>
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="direccion">
                                    <h4>Dirección</h4></label>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Avenida San Martín 150" title="enter a location" value='{{old('direccion')}}'>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="exampleFormControlFile1"  > <h4> Actualizá tu foto! <i class="zmdi zmdi-camera"></i> </h4>
                                </label>
                                    <input name="avatar" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                            <label for="password"><h4>Contraseña</h4></label>
              
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" title="enter your password." >
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="pasword_confirmation">
                                    <h4>Repita la contraseña</h4></label>
                                <input type="password" class="form-control" name="pasword_confirmation" id="pasword_confirmation" placeholder="Repetir Contraseña" title="enter your password again." >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="site-btn" style="background: inherit;" type="submit"> Guardar</button>
                                <button class="site-btn" style="background: inherit;" type="reset"> Restaurar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!--/tab-pane-->
        </div>
        <!--/tab-content-->

    </div>
    <!--/col-9-->
</div>
@endsection

@section('scripts')

<script>
    function myFunction() {
    // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var text = document.getElementById("cantidadMesesUso");
        var estadoUso = document.getElementById("estadoUsoProducto");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
            text.disabled = false;
            estadoUso.disabled = false;
        } else {
            text.disabled = true;
            estadoUso.disabled = true;
        }
    }

    $(document).ready(function () {
        $('.js-example-basic-single').selectize({
            sortField: 'text'
        });
    });
</script>
       
  @endsection