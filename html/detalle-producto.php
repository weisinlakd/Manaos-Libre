<!DOCTYPE html>
<html lang="zxx">

  <?php
    $producto = true;
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
     require_once('header.php');
    ?>
<div class="container">
  <div class="row col-12 mx-0">

    <section class="page-add">
    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="page-breadcrumb">
    <h2>Producto<span>.</span></h2>
    </div>
    <form>
  <p class="clasificacion">
    <p>  Opiniones </p>
    <input id="radio1" type="radio" name="estrellas" value="1"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="2"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="4"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="5"><!--
    --><label for="radio5">★</label>  </p>

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
                <img src="../img/placeholder-big.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="d-none d-md-block d-xl-block">
                <img src="../img/banner-placeholder.jpg" class="d-block w-100 " alt="...">
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-block d-md-none">
                <img src="../img/placeholder-big.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="d-none d-md-block d-xl-block">
                <img src="../img/banner-placeholder.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-block d-md-none">
                <img src="../img/placeholder-big.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="d-none d-md-block d-xl-block">
                <img src="../img/banner-placeholder.jpg" class="d-block w-100" alt="...">
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

    <p>Descripcion del producto: <br> </p>
        <p> - <br> </p>
          <p> - <br> </p>
            <p> - <br> </p>
    <p> Precio: 23$</p>
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
