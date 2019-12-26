<!DOCTYPE php>
<php lang="zxx">

  <?php
    
    session_start();
		$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : false;
		// var_dump($usuario);
		// var_dump($_SESSION);
		$usuarioLog = false;
		if ($usuario) {
			$usuarioLog = true;
		}
    $titulo = "Home";
    // $usuarioLog = rand(0,1);
    $producto = false;
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
      $tituloPag = 'Resultados';
      require_once('header.php');
      require_once('anuncioYtitulo.php');
    ?>
<br>

<div class="container">
  <div class="row col-12 mx-auto">
    <div class=" col-xs-12 col-md-6 ">
      <div class="row container m-0 no-gutters img-fluid"><!-- Slider de Imagenes -->
        <div class="col-12 img-fluid">
          <div id="homeCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#homeCarousel" data-slide-to="1"></li>
              <li data-target="#homeCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-block d-md-none img-fluid">
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
     </div><!-- (Fin) Slider de Imagenes -->
     <!-- (inicio) pie de producto -->
     <div class="row col-12 ">
     <div class="col-12 row">
       <div class="col-11">
         <h1><a style="color: black; text-decoration: none;" href="detalle-producto.php">Titulo Producto</a></h1><h2>$1234</h2>
       </div>
     <div class="col-1">
       <a class="nav-link carrito" href="shopping-cart.php"><span class="d-block d-md-none"></span><i class="icon ion-md-cart"></i></a>
         <div id="homeCarousel" class="carousel slide" data-ride="carousel">
         </div>
     </div>
     </div>
     <div class="col-6 ">
       <p> Descripcion introductiva <br>  Ubicacion</p>

     </div>
     </div>
     <!-- (fin) pie de producto -->

    </div>

  </div>

  <div class="col-xs-12 col-md-6">
    <div class="row container m-0 no-gutters h-50px"><!-- Slider de Imagenes -->
      <div class="col-12">
        <div id="homeCarousel" class="carousel slide" data-ride="carousel">
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
   </div><!-- (Fin) Slider de Imagenes -->
   <!-- (inicio) pie de producto -->
   <div class="row col-12 ">
   <div class="col-12 row">
     <div class="col-11">
       <h1><a style="color: black; text-decoration: none;" href="detalle-producto.php">Titulo Producto</a></h1><h2>$1234</h2>
     </div>
   <div class="col-1">
     <a class="nav-link carrito" href="shopping-cart.php"><span class="d-block d-md-none"></span><i class="icon ion-md-cart "></i></a>
       <div id="homeCarousel" class="carousel slide" data-ride="carousel">
       </div>
   </div>
   </div>
   <div class="col-6 ">
     <p> Descripcion introductiva <br>  Ubicacion</p>

   </div>
   </div>
   <!-- (fin) pie de producto -->

  </div>
  </div>
</div>
  <br>
<div class="row col-12 mx-auto">
  <div class="col-xs-12 col-md-6">
    <div class="row container m-0 no-gutters h-50px"><!-- Slider de Imagenes -->
      <div class="col-12">
        <div id="homeCarousel" class="carousel slide" data-ride="carousel">
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
   </div><!-- (Fin) Slider de Imagenes -->
   <!-- (inicio) pie de producto -->
   <div class="row col-12 ">
   <div class="col-12 row">
     <div class="col-11">
       <h1><a style="color: black; text-decoration: none;" href="detalle-producto.php">Titulo Producto</a></h1><h2>$1234</h2>
     </div>
   <div class="col-1">
     <a class="nav-link carrito" href="shopping-cart.php"><span class="d-block d-md-none"></span><i class="icon ion-md-cart "></i></a>
       <div id="homeCarousel" class="carousel slide" data-ride="carousel">
       </div>
   </div>
   </div>
   <div class="col-6 ">
     <p> Descripcion introductiva <br>  Ubicacion</p>

   </div>
   </div>
   <!-- (fin) pie de producto -->

  </div>

</div>

<div class="col-xs-12 col-md-6">
  <div class="row container m-0 no-gutters h-50px"><!-- Slider de Imagenes -->
    <div class="col-12">
      <div id="homeCarousel" class="carousel slide" data-ride="carousel">
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
 </div><!-- (Fin) Slider de Imagenes -->
 <!-- (inicio) pie de producto -->
 <div class="row col-12 ">
 <div class="col-12 row">
   <div class="col-11">
     <h1><a style="color: black; text-decoration: none;" href="detalle-producto.php">Titulo Producto</a></h1><h2>$1234</h2>
   </div>
 <div class="col-1">
   <a class="nav-link carrito" href="shopping-cart.php"><span class="d-block d-md-none"></span><i class="icon ion-md-cart "></i></a>
     <div id="homeCarousel" class="carousel slide" data-ride="carousel">
     </div>
 </div>
 </div>
 <div class="col-6 ">
   <p> Descripcion introductiva hola  <br>  Ubicacion</p>

 </div>
 </div>
 <!-- (fin) pie de producto -->

</div>
<br>
</div>
<div class="col-xs-12 col-md-6 mx-auto">
  <div class="row container m-0 no-gutters h-50px"><!-- Slider de Imagenes -->
    <div class="col-12">
      <div id="homeCarousel" class="carousel slide" data-ride="carousel">
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
 </div><!-- (Fin) Slider de Imagenes -->
 <!-- (inicio) pie de producto -->
 <div class="row col-12 ">
 <div class="col-12 row">
   <div class="col-11">
     <h1><a style="color: black; text-decoration: none;" href="detalle-producto.php">Titulo Producto</a></h1><h2>$1234</h2>
   </div>
 <div class="col-1">
   <a class="nav-link carrito" href="shopping-cart.php"><span class="d-block d-md-none"></span><i class="icon ion-md-cart"></i></a>
     <div id="homeCarousel" class="carousel slide" data-ride="carousel">
     </div>
 </div>
 </div>
 <div class="col-6 ">
   <p> Descripcion introductiva <br>  Ubicacion</p>

 </div>
 </div>
 <!-- (fin) pie de producto -->

</div>

</div>
<div class="col-xs-12 col-md-6 mx-auto">
  <div class="row container mx-auto0 no-gutters"><!-- Slider de Imagenes -->
    <div class="col-12">
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

</div><!-- (Fin) Slider de Imagenes -->
<!-- (inicio) pie de producto -->
<div class="row col-12 ">
<div class="col-12 row">
  <div class="col-11">
    <h1><a style="color: black; text-decoration: none;" href="detalle-producto.php">Titulo Producto</a></h1><h2>$1234</h2>
  </div>
<div class="col-1">
  <a class="nav-link carrito" href="shopping-cart.php"><span class="d-block d-md-none"></span><i class="icon ion-md-cart "></i></a>
    <div id="homeCarousel" class="<carousel></carousel> slide" data-ride="carousel">
    </div>
</div>
</div>
<div class="col-6 ">
  <p> Descripcion introductiva <br>  Ubicacion</p>

</div>
</div>
<!-- (fin) pie de producto -->


</div>
</div>
</div>

<br>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>

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
</php>
