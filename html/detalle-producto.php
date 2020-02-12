<!DOCTYPE html>
<html lang="zxx">

  <?php
    session_start();
    require_once('classes/Usuario.php');
    require_once('classes/Connection.php');
    require_once('classes/Producto.php');
    require_once('classes/FotoProducto.php');
    require_once('classes/Comentario.php');
    $usuario = $usuario = isset($_SESSION['usuario']) ? unserialize($_SESSION["usuario"]) : false;
    if ($usuario) {$usuarioLog = true;} else $usuarioLog = false;
    $titulo = 'Producto';
    $producto = true;
    // var_dump($_GET);
    $id = isset($_GET["id"]) ? $_GET["id"] : false;
    // var_dump($id);
    if ($id){
      
      $prod = new Producto(2, "hola", "hola wacho", 400, 2, 405);
      $foto = new FotoProducto(1,"","");
      $comentario = new Comentario(1,1,"");
      $conn = new Connection();
      $pdo = $conn->start();
      $productoDB = $prod->getProductoById($pdo, $id);
      $fotos = $foto->getFotoProductoByIdProducto($pdo, $id);
      if ($fotos === false) {
        
        $placeholder = new stdClass();
        $placeholder->path = "../img/placeholder-home.jpg";
        $fotos = array_fill(0,3, $placeholder);
      }

      $comentarios = $comentario->getComentariosByProductoId($pdo, $id);
      if ($comentarios === false) {
        
        $comentarioPlaceholder = new stdClass();
        $comentarioPlaceholder->comentario = "No hay Comentarios!";
        $comentarios = array_fill(0,1, $comentarioPlaceholder);
      }

      var_dump($comentarios);
      $valoracion = $prod->setValoracion($pdo)/2;
      
      $valoracion = floor($valoracion * 2) / 2;
      // $disabled = false;
      if ($usuarioLog) {
        
        require_once('votar.php');
      }
      // var_dump($valoracion);
    }

      require_once('head.php');
    $idProducto = $id;
    // var_dump($_POST);
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
     require_once('header.php');

     if (!$id || !$productoDB) {
       echo "<br><br><h1>No existe ese producto</h1><br><br>";
       require_once('footer.php');
      //  die;
     }
    ?>
<div class="container">
  <div class="row col-12 mx-0">

    <section class="page-add">
    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="page-breadcrumb">
    <h2><?=$productoDB->name()?><span>.</span></h2>
    </div>
    <form action="#" method="post">
      
      <!-- cambios a las estrellas -->
      
      <p class="clasificacion">
        
        <?php require_once('ratings-detalle.php') ?>
        
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
            <div class="carousel-item active">
              <div class="d-block d-md-none">
                <img src="<?=$fotos[0]->path?>" class="d-block w-100" alt="...">
              </div>
              <div class="d-none d-md-block d-xl-block">
                <img src="<?=$fotos[0]->path?>" class="d-block w-100 " alt="...">
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-block d-md-none">
                <img src="<?=$fotos[1]->path?>" class="d-block w-100" alt="...">
              </div>
              <div class="d-none d-md-block d-xl-block">
                <img src="<?=$fotos[1]->path?>" class="d-block w-100" alt="...">
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-block d-md-none">
                <img src="<?=$fotos[2]->path?>" class="d-block w-100" alt="...">
              </div>
              <div class="d-none d-md-block d-xl-block">
                <img src="<?=$fotos[2]->path?>" class="d-block w-100" alt="...">
              </div>
            </div>
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

      </div>

      <div class="col-lg-3 col-xs-12 mx-auto mx-0 fluid float-lg-left">

    <h5>Descripcion del producto: <br> </h5>
        <h4><?=$productoDB->descripcion()?></h4>
    <h2>$ <?=$productoDB->precio()?></h2>
    <p>Vendedor: <?= $productoDB->getVendedor($pdo);?> 
    <br>(para más información comprar el producto)</p>
    <br>
    <a class="btn btn-primary" href="#" role="button">Agregar al Carrito</a>
      </div>
      </div>

</div>

    <div class="row col-12 container">
      <div class="col-12 xs-3">
    <div class="comments-container">
      <br>
      <h1>Comentarios</h1>

      <ul id="comments-list" class="comments-list">
        <li>
          <div class="comment-main-level col-xs-4">
            <!-- Avatar -->
            <div class="comment-avatar"><img src="https://icon-library.net/images/no-user-image-icon/no-user-image-icon-27.jpg" alt=""></div>
            <!-- Contenedor del Comentario -->
            <div class="comment-box">
              <div class="comment-head">
                <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                <span>hace 20 minutos</span>
                <i class="fa fa-reply"></i>

              </div>
              <div class="comment-content  col-12 col-xs-12 ">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
              </div>
            </div>
          </div>
          <!-- Respuestas de los comentarios -->
          <ul class="comments-list reply-list">
            <li>
              <!-- Avatar -->
              <div class="comment-avatar"><img src="https://icon-library.net/images/no-user-image-icon/no-user-image-icon-27.jpg" alt=""></div>
              <!-- Contenedor del Comentario -->
              <div class="comment-box">
                <div class="comment-head">
                  <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                  <span>hace 10 minutos</span>
                  <i class="fa fa-reply"></i>

                </div>
                <div class="comment-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                </div>
              </div>
            </li>

            <li>
              <!-- Avatar -->
              <div class="comment-avatar"><img src="https://icon-library.net/images/no-user-image-icon/no-user-image-icon-27.jpg" alt=""></div>
              <!-- Contenedor del Comentario -->
              <div class="comment-box">
                <div class="comment-head">
                  <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                  <span>hace 10 minutos</span>
                  <i class="fa fa-reply"></i>

                </div>
                <div class="comment-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                </div>
              </div>
            </li>
          </ul>
        </li>

        <li>
          <div class="comment-main-level">
            <!-- Avatar -->
            <div class="comment-avatar"><img src="https://icon-library.net/images/no-user-image-icon/no-user-image-icon-27.jpg" alt=""></div>
            <!-- Contenedor del Comentario -->
            <div class="comment-box">
              <div class="comment-head">
                <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                <span>hace 10 minutos</span>
                <i class="fa fa-reply"></i>

              </div>
              <div class="comment-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
        </div>
        </div>
</div>
</div>
</div>
</div>
</div>

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
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bba5e7fdb0ecd42f6a179fdb-|49" defer=""></script></body>
</html>

<?php
// estrellas originales
// <p class="clasificacion">
//         <p>  Opiniones </p>
//         <input id="radio5" type="radio" name="estrellas" value="5"><!--
//         --><label for="radio5">★</label><!--
//         --><input id="radio4" type="radio" name="estrellas" value="4"><!--
//         --><label for="radio4">★</label><!--
//         --><input id="radio3" type="radio" name="estrellas" value="3"><!--
//         --><label for="radio3">★</label><!--
//         --><input id="radio2" type="radio" name="estrellas" value="2"><!--
//         --><label for="radio2">★</label><!--
//         --><input id="radio1" type="radio" name="estrellas" value="1"><!--
//         --><label for="radio1">★</label>  </p>

?>