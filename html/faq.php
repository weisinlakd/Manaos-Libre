<!doctype html>
<html lang="en">
  <?php
    session_start();
		$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : false;
		// var_dump($usuario);
		// var_dump($_SESSION);
		$usuarioLog = false;
		if ($usuario) {
			$usuarioLog = true;
    }
    $producto = false;
    $titulo = 'Preguntas Frecuentes';
    require_once('head.php');
  ?>
  <body>

    <div class="container-fluid p-0"><!-- Contenedor -->
      <?php require_once('header.php')?>

      <!-- <div class="row color-4 p-3">

        <div class="col-12 mb-3 text-center">
          <div class="p-4 bg-white">
            <h2>Preguntas Frecuentes</h2>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="col-12">
            <h4>¿Pregunta 1?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 1</p>
          </div>

          <div class="col-12">
            <h4>¿Pregunta 2?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 2</p>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="col-12">
            <h4>¿Pregunta 3?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 3</p>
          </div>

          <div class="col-12">
            <h4>¿Pregunta 4?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 4</p>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="col-12">
            <h4>¿Pregunta 5?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 5</p>
          </div>

          <div class="col-12">
            <h4>¿Pregunta 6?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 6</p>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="col-12">
            <h4>¿Pregunta 7?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 7</p>
          </div>

          <div class="col-12">
            <h4>¿Pregunta 8?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 8</p>
          </div>
        </div>
      </div> -->

      <div class="row color-4 p-3 text-center m-0"><!-- Informacion General -->
        <div class="col-12">
          <h2>Manaos Libre</h2>
        </div>
        <div class="col-12">
          <p>Proyecto integrador del curso "Full Stack Dev" de Digital House, basado en un catalogo de productos
          o también llamado e-commerce. </p>
        </div>
        <div class="col-12 col-md-6">
          <div class="col-12">
            <h3>Primer Sprint</h3>
          </div>
          <div class="col-12 text-left">
            <ul>
              <li>Home - Con información general del proyecto</li>
              <li>F.A.Q. - Preguntas frecuentes</li>
              <li>Formulario de Registro - Visual, pero no funcional</li>
              <li>Formulario de Login - Visual, pero no funcional</li>
              <li>Formulario de Contacto - Visual, pero no funcional</li>
              <li>Perfil de Usuario</li>
              <li>Vista de listado de productos</li>
              <li>Vista del detalle de un producto</li>
              <li>Vista del carrito de compra</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="col-12">
            <h3>Integrantes</h3>
          </div>
          <div class="col-12 text-left">
            <ul>
              <li>Luciano Laurent - Scrum Master</li>
              <li>Fausto Castillo - Product Owner</li>
              <li>Agustin Magliola - Dev</li>
              <li>Luciano Ludueña - Dev</li>
            </ul>
          </div>
        </div>
      </div><!-- (Fin)  Informacion General -->

    </div><!-- (Fin)Contenedor -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->    
    <?php require_once('footer.php')?>
  
  
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