
<?php //var_dump($_COOKIE['datosParaModificar']); ?>
<!DOCTYPE html>
<html lang="zxx">
  <?php
    $boolCook = isset($_COOKIE['datosParaModificar']) ? true : false;
    $error = isset($_COOKIE['errorEnActualizacion']) ? true : false;
    $errorFoto = isset($_COOKIE['fotoIncorrecta']) ? true : false;
    // echo '<br>';echo $boolCook;echo '<br>';
    $errFoto = isset($_COOKIE['fotoIncorrecta']) ? $_COOKIE['fotoIncorrecta'] : 'Cargá tu foto! (Opcional)';
    
    $col = $errFoto == 'Hubo un problema al cargar la foto!' ? 'style="color: red"' : 'style="color: black"';
    
    // var_dump($_COOKIE);
    if ($boolCook) {
        $datos = unserialize($_COOKIE['datosParaModificar']);
    }

    
    
    // var_dump($datos);
    session_start();
    require_once('classes/Usuario.php');
    require_once('classes/Connection.php');
    require_once('classes/Ciudad.php');
    require_once('classes/Valoracion.php');
    $conn = new Connection();
    $pdo = $conn->start();
    $ciudad = new Ciudad("","");
    $ciudades = $ciudad->getCiudades($pdo);
    $usuario = isset($_SESSION['usuario']) ? unserialize($_SESSION["usuario"]) : false;
    if ($usuario) $usuarioLog = true;
    //   var_dump($usuario);
    //  echo '<br>';
    //  var_dump($_SESSION);
    // var_dump($usuario->fechaCreacion());die;
    $val = new Valoracion(1,1,"");
    $totalVal = $val->getTotalValoraciones($pdo,$usuario->id());

    // var_dump($totalVal);die;

    function valorDato($key){
        global $boolCook, $datos, $usuario;
        
        if ($boolCook){
            echo $datos[$key];
        } if ($key == 'ciudad_id' || $key == 'location' || $key == 'pass' || $key == 're_pass'){
            echo '';
        }else {
            // if (isset($usuario[$key]) && $key != 'pass'){
            //     echo $usuario[$key];
            // } else 
            echo $usuario->$key();
            
        }
    }
    
    
    //var_dump($usuario['avatar']);
    $titulo = 'Mi Perfil';
    $producto = false;
    $fecha = $usuario->fechaCreacion() != null ? $usuario->fechaCreacion() : 'relogueá para obtener la informacion!';
    require_once('head.php');
  ?>
	<body>

	<!-- <div id="preloder">
		<div class="loader"></div>
	</div>

	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
			<input type="text" id="search-input" placeholder="Buscar Productos...">
			</form>
		</div>
	</div> -->

  <?php require_once('header.php'); ?>

  <br>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10 page-breadcrumb">
            <h2 style="border-bottom: 2px solid #d0d7db; padding-bottom: 15px;  font-size: 48px;">Hola, <?=$usuario->name()?><span style="color:#b0bcc2">.</span></h2>
            <?php if ($error) : ?>
                <h2 style="color: red">Hubo un error al actualizar los datos</h2>
                <?php endif ?>
          </div>
        <div class="col-sm-2">
            <!-- <a href="/users" class="pull-right"> -->
              <div class="row">
                <div class="col-2"></div>
                <?php if ($usuario->foto() != 'error') :?>
                    <img title="profile image" class="img-circle img-responsive col-12" src="<?=$usuario->foto()?>">
                <?php else : ?>
                    <img title="profile image" class="img-circle img-responsive col-12" src="../img/user.png">
                <?php endif ?>
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
                        <strong>Nombre completo</strong></span> <?php if ($usuario->apellido()){ echo $usuario->name().' '.$usuario->apellido(); } else echo $usuario->name()?></li>
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
                <li class="list-group-item text-right"><span class="pull-left"><strong>Productos en Venta</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Mis Valoraciones</strong></span> <?=$totalVal?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Comentarios</strong></span> 37</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Ratings a mis productos</strong></span> 78</li>
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
                      <a class="dropdown-item" data-toggle="tab" href="#home">Últimas Actividades </a>
                      <a class="dropdown-item" data-toggle="tab" href="#messages">Preguntas</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#settings">Editar Perfil</a>
                    </div>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane" id="home">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Vendedor</th>
                                    <th>Ciudad</th>
                                    <th>Valoración</th>
                                    <th>Recepción</th>
                                </tr>
                            </thead>
                            <tbody id="items">
                                <tr>
                                    <td>1</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                </tr>
                                
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
                        <li class="list-group-item text-muted">Preguntas Recientes</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">lorem ipsum...</a> 2.13.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">lorem ipsum...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">lorem ipsum...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">lorem ipsum...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">lorem ipsum...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">lorem ipsum...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">lorem ipsum...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">lorem ipsum...</a> 2.11.2014</li>

                    </ul>
                    <br>
                </div>
                <!--/tab-pane-->
                <div class="tab-pane active" id="settings">
                    <br>
                <h2>Editar Perfil</h2>
                    <hr>
                    <form class="form" action="updateUsuario.php" method="post" id="registrationForm"
                        enctype="multipart/form-data" oninput='re_pass.setCustomValidity(re_pass.value != pass.value ? "Las contraseñas no coinciden." : "")'>
                        <div class="form-group">
                                
                            <div class="col-xs-6">
                                <label for="name">
                                    <h4>Nombre(s)</h4></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre(s)" title="enter your first name if any." value='<?=valorDato('name')?>'>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Apellido(s)</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellido(s)" title="enter your last name if any." value='<?=valorDato('last_name')?>'>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone">
                                    <h4>Teléfono</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" title="enter your phone number if any." value='<?=valorDato('phone')?>'>
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
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value='<?=$usuario->email()?>' disabled>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-xs-6">
                            <label for="ciudad"><h4>Ciudad y Dirección</h4></label><br>
                            <select name="ciudad" id="ciudad"  class="js-example-basic-single" placeholder="buscá tu ciudad" value='<?=valorDato('ciudad_id')?>'>
                            <?php foreach ($ciudades as $ciudad) : ?>
                            <option value="<?=$ciudad->id?>" name="ciudad_id" > <?=$ciudad->nombre?> </option> 
                            <?php endforeach ?>
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="location">
                                    <h4>Dirección</h4></label>
                                <input type="text" class="form-control" name="location" id="location" placeholder="Avenida San Martín 150" title="enter a location" value='<?=valorDato('location')?>'>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="exampleFormControlFile1"  > <h4 <?=$col?>> <?=$errFoto?> <i class="zmdi zmdi-camera"></i> </h4>
                                </label>
                                    <input name="avatar" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                            <label for="password"><h4>Contraseña</h4></label>
              
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" title="enter your password." value='<?=valorDato('pass')?>'>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="re_pass">
                                    <h4>Repita la contraseña</h4></label>
                                <input type="password" class="form-control" name="re_pass" id="re_pass" placeholder="Repetir Contraseña" title="enter your password again." value='<?=valorDato('re_pass')?>'>
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
<!--/row-->


<?php require_once('footer.php');?>
    
    
    <script src="../js/jquery-3.3.1.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/jquery.magnific-popup.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/jquery.slicknav.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/owl.carousel.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/jquery.nice-select.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/mixitup.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/main.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script type="bba5e7fdb0ecd42f6a179fdb-text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script>
    $(document).ready(function () {
        $('.js-example-basic-single').selectize({
            sortField: 'text'
        });
    });
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bba5e7fdb0ecd42f6a179fdb-|49" defer=""></script></body>
</html>