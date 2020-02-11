<!doctype html>
<html lang="en">
  <?php
  
    session_start();
    require_once('classes/Usuario.php');
    require_once('classes/Connection.php');
    require_once('classes/Producto.php');
    require_once('classes/Categoria.php');
    require_once('classes/FotoProducto.php');
    require_once('classes/Ciudad.php');
    require_once('classes/Valoracion.php');
    $usuario = $usuario = isset($_SESSION['usuario']) ? unserialize($_SESSION["usuario"]) : false;
    if ($usuario) $usuarioLog = true;

    $conn = new Connection();
    $pdo = $conn->start();
    $producto = new Producto(2, "hola", "hola wacho", 400, 2, 405);
    $ciudad = new Ciudad("","");
    $foto = new FotoProducto(1,"","");

    // var_dump($fotos[0]->path);
    $masVotados = $producto->getMasVotados($pdo);
    $masBaratos = $producto->getMasBaratos($pdo);
    // var_dump($masBaratos);
    // die;
    $titulo = "Home";
    // $usuarioLog = rand(0,1);
    $producto = false;
    require_once('head.php');
    
  ?>
  
  
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
  <body>

      <!-- <div id="preloder">
          <div class="loader"></div>
      </div> -->

    <div class="container-fluid caja p-0 m-0"><!-- Contenedor -->
      <?php 
        require_once('header.php');
        require_once('slider-home.php');
      ?>

      

      <div class="row col-12 p-3 text-center m-0"><!-- Informacion General -->
        
        <br>

        <?php 
          $id = 1;
          $titulo = "Más Votados";
          require('slider-4-productos.php'); 
        ?>

          <br>
        <?php
          $id = 2;
          $titulo = "Más Baratos";
          $ofertas = true;
          $masVotados = $masBaratos;
          require('slider-4-productos.php') ?>
    

      </div><!-- (Fin)  Informacion General -->
      <br>
      <?php 
        require_once('footer.php');
      ?>
    </div><!-- (Fin)Contenedor -->

      <!-- Optional JavaScript -->
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
