<!DOCTYPE html>
<html lang="zxx">

  <?php
    session_start();
    require_once('classes/Usuario.php');
    $usuario = $usuario = isset($_SESSION['usuario']) ? unserialize($_SESSION["usuario"]) : false;
    if ($usuario) $usuarioLog = true;

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
    <form class="container-fluid col-8" method="POST" action="newPublicacion.php">
    <div class="form-group">
        <label for="nombreProducto">Nombrá tu publicación:</label>
        <input name="name" type="nombre" class="form-control" id="nombreProducto" placeholder="Iphone X 128GB" required autofocus>
    </div>
    <div class="form-group">
        <label for="ciudad">Ciudad</label>
        <input name="ciudad_id" type="number" class="form-control" id="ciudad" placeholder="1" required >
    </div>
    <div class="form-group">
        <label for="categoriaProducto">Selecciona todas las categorías que creas convenientes:</label>
        <select name="categoria" multiple class="form-control" id="categoriaProducto" data-live-search="true">
        <option name="1">1</option>
        <option name="2">2</option>
        <option name="3">3</option>
        <option name="4">4</option>
        <option name="5">5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="descripcionProducto">Descripción</label>
        <textarea name="descripcion" class="form-control" id="descripcionProducto" rows="3"></textarea>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
        <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label name="is_usado"class="form-check-label" for="defaultCheck1">
           ¿Es usado?
        </label></div>
    </div>
    <div class="col-md-4 mb-3">
    <label for="cantidadProducto">Cantidad de Meses de uso</label>
        <input name="meses_uso" type="number" class="form-control" id="cantidadProducto" placeholder="1" required >
    </div>
    <div class="col-md-4 mb-3">
        <label for="categoriaProducto">Selecciona el estado más acorde a tu producto</label>
        <select name="estado_uso" class="form-control custom-select " id="categoriaProducto" data-live-search="true">
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
        <input name="precio" type="number" class="form-control" id="inlineFormInputGroup" placeholder="Precio">
      </div>
    <div class="form-group custom-file">
        <label for="fotoProducto" class="custom-file-label" lang="es">Agregá tu foto</label>
        <input name="foto" type="file" class="custom-file-input" id="fotoProducto">
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
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bba5e7fdb0ecd42f6a179fdb-|49" defer=""></script></body>
  </html>