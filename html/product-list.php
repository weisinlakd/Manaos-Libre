<!DOCTYPE php>
<html lang="zxx">

  <?php
    
    session_start();
    require_once('classes/Usuario.php');
    $usuario = $usuario = isset($_SESSION['usuario']) ? unserialize($_SESSION["usuario"]) : false;
    if ($usuario) $usuarioLog = true;
    $titulo = "Productos";
    // $usuarioLog = rand(0,1);
    $producto = false;
    require_once('getProductos.php');
    // var_dump($_GET);  
    // var_dump($productos[0]->cantidad());
    // var_dump($productos);

    // die;
    $res = isset($productos[1]) ? true : false;
      // $cantidad = [1,2,3,4,5,6,7,8];
      var_dump($res);
      var_dump($productos);
    if ($res){
      $resultados = $productos[0]->cantidad(); 
      $paginas = round($resultados/8, 0, PHP_ROUND_HALF_ODD) ? round($resultados/8, 0, PHP_ROUND_HALF_ODD) : 1;
      setcookie("resultados", $paginas, time()+60*7);
    } else {
      $resultados = 'No hay resultados';
      $paginas = $_COOKIE["resultados"];
    }
    require_once('head.php');
  ?>

  <body>

    <!-- <div id="preloder">
      <div class="loader"></div>
    </div> -->

    <!-- <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Buscar Productos...">
        </form>
      </div>
    </div> -->


    <?php 
      // $tituloPag = "Resultados (". count($productos) . ')';
      
      
      // var_dump($resultados); die;
      $tituloPag = "Resultados (". $resultados . ')';
      require_once('header.php');
      require_once('anuncioYtitulo.php');

      // echo count($cantidad);
      $ubis = ["Córdoba", "Rosario", "Buenos Aires"];
      $prod = ["Iphone", "Televisor", "Pelota"];
      $desc = ['telefono muy bueno', 'televisor 40 pulgadas', 'Pelota Adidas Roteiro'];
     

    ?>
<br>

<div class="container">
  

  <div class="row">
    
    <?php 
    //   foreach ($cantidad as $producto) {
    //   $rand = rand(0,2);
    //   $id = $producto;
    //   $titulo = $prod[$rand];
    //   $precio = rand( 200, 400);
    //   $ubicacion = $ubis[$rand];
    //   $descripcion = $desc[$rand];
    //   $imagen = $rand;
    //   require('producto.php');
    // }
    ?>

    <?php 
      foreach ($productos as $producto) {
      
      $id = $producto->id();
      $titulo = $producto->name();
      $precio = $producto->precio();
      $ubicacion = $producto->ciudad($pdo);
      // var_dump($ubicacion); die;
      $descripcion = $producto->descripcion();
      $imagen = rand(0,3);
      require('producto.php');
    }
    ?>
      
  </div>
</div>
  

<br>
    <?php require_once('paginado.php');?> 

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
      <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bba5e7fdb0ecd42f6a179fdb-|49" defer=""></script>
    </body>
</html>