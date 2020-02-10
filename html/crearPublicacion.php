<!DOCTYPE html>
<html lang="zxx">

  <?php
    session_start();
    require_once('classes/Usuario.php');
    $usuario = $usuario = isset($_SESSION['usuario']) ? unserialize($_SESSION["usuario"]) : false;
    if ($usuario) $usuarioLog = true;
    //foto cookie
    $errFoto = isset($_COOKIE['fotoIncorrecta']) ? $_COOKIE['fotoIncorrecta'] : 'Agregá tus fotos (3 obligatoriamente) !';
    
    $col = $errFoto == 'Hubo un problema al cargar las fotos!' ? 'style="color: red"' : 'style="color: black"'; 
    //datos formulario
    $boolCook = isset($_COOKIE['datosIngresados']) ? true : false;
    if ($boolCook){
      $datos = unserialize($_COOKIE['datosIngresados']);
    }

    function valorDato($key){
      global $boolCook, $datos;
      if ($boolCook){
          echo $datos[$key];
      } else { 
          echo '';
      }
    }
    //
    $titulo = "Publicar Producto";
    $producto = false;
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

  <?php
    require_once('header.php');
  ?>

<?php 
  $tituloPag = "Completá tus datos";
  require_once('anuncios.php');
?>
<div class="container-fluid col-12">
    <br>
    <h1>Creá tu Publicación!</h1>
    <br>
    <form class="container-fluid col-8" method="POST" action="newPublicacion.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nombreProducto">Nombrá tu publicación:</label>
        <input name="name" type="nombre" class="form-control" id="nombreProducto" placeholder="Iphone X 128GB" required autofocus value='<?=valorDato('name')?>'>
    </div>
    <div class="form-group">
        <label for="ciudad">Ciudad</label>
        <input name="ciudad_id" type="number" class="form-control" id="ciudad" placeholder="1" required value='<?=valorDato('ciudad_id')?>'>
    </div>
    <div class="form-group">
        <label for="categoriaProducto">Selecciona la categoría que creas conveniente:</label>
        <select name="categoria" class="form-control" id="categoriaProducto" data-live-search="true" value='<?=valorDato('categoria')?>'>
        <option name="1" value='400'>1</option>
        <option name="2" value='400'>2</option>
        <option name="3" value='400'>3</option>
        <option name="4" value='400'>4</option>
        <option name="5" value='400'>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="descripcionProducto">Descripción</label>
        <textarea name="descripcion" class="form-control" id="descripcionProducto" rows="3" value='<?=valorDato('descripcion')?>'></textarea>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
        <div class="form-check">
          <input class="form-check-input"  type="checkbox" id="myCheck"  onclick="myFunction()">
          <label name="myCheck" class="form-check-label" for="defaultCheck1">
            ¿Es usado?
          </label>
        </div>
    </div>
    <div class="col-md-4 mb-3" id="divAInsertar">
    <label for="cantidadMesesUso">Cantidad de Meses de uso</label>
      <input name="meses_uso" type="number" class="form-control" id="cantidadMesesUso" placeholder="1" required  disabled>
  
      <label for="estadoUsoProducto">Selecciona el estado más acorde a tu producto</label>
      <select name="estado_uso[]" class="form-control custom-select " id="estadoUsoProducto" data-live-search="true" disabled>
      <option name="1">Semi-nuevo</option>
      <option name="2">Uso regular</option>
      <option name="3">Uso intenso</option>
      <option name="4">Daños anormales por uso</option>
      <option name="5">Daños intensos</option>
      <option name="6">Venta como partes para repuesto</option>
      </select>
    </div>
  </div>
    <div class="form-check">
    


    </div>
    <br>
    <div class="form-group">
      <label class="sr-only" for="inlineFormInputGroup">Precio</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">$</div>
        </div>
        <input name="precio" type="number" class="form-control" id="inlineFormInputGroup" placeholder="Precio" value='<?=valorDato('precio')?>'>
      </div>
    <div class="form-group custom-file">
        <label for="fotoProducto" class="custom-file-label" lang="es" <?=$col?> ><?=$errFoto?></label>
        <input name="fotos[]" type="file" class="custom-file-input" id="fotoProducto" multiple>
    </div>
    <br>
    <div class="form-check">
        <br>
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Acepto los Términos y Condiciones de Manaos-Libre
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
        <label class="form-check-label" for="defaultCheck2">
            Disabled checkbox
        </label>
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Crear Publicación</button>
    </form>
</div>



<?php 
        require_once('footer.php');
      ?>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

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
        </script>
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bba5e7fdb0ecd42f6a179fdb-|49" defer=""></script></body>
  </html>