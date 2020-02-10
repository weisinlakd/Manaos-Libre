<div class=" col-xs-12 col-md-6 ">
      <div class="row container m-0 no-gutters img-fluid"><!-- Slider de Imagenes -->
        <div class="col-12 img-fluid">
          <div id="homeCarousel<?=$id?>" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#homeCarousel<?=$id?>" data-slide-to="0" class="active"></li>
              <li data-target="#homeCarousel<?=$id?>" data-slide-to="1"></li>
              <li data-target="#homeCarousel<?=$id?>" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-block d-md-none img-fluid">
                  <!--  -->
                  <img src="<?=$fotos[0]->path?>" class="d-block w-100" alt="...">
                </div>
                <div class="d-none d-md-block d-xl-block">
                  <!--  -->
                  <img src="<?=$fotos[0]->path?>" class="d-block w-100" alt="...">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-block d-md-none">
                  <img src="<?=$fotos[1]->path?>" class="d-block w-100" alt="...">
                </div>
                <div class="d-none d-md-block d-xl-block">
                  <!--  -->
                  <img src="<?=$fotos[1]->path?>" class="d-block w-100" alt="...">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-block d-md-none">
                  <img src="<?=$fotos[2]->path?>" class="d-block w-100" alt="...">
                </div>
                <div class="d-none d-md-block d-xl-block">
                  <!--  -->
                  <img src="<?=$fotos[2]->path?>" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#homeCarousel<?=$id?>" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#homeCarousel<?=$id?>" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
     </div><!-- (Fin) Slider de Imagenes -->
     <!-- (inicio) pie de producto -->
     <div class="row col-12 ">
     <div class="col-12 row">
       <div class="col-11">
         <h1><a style="color: black; text-decoration: none;" href="detalle-producto.php?id=<?=$id?>"><?=$titulo?></a></h1><h2>$<?=$precio?></h2>
       </div>
     <div class="col-1">
       <a class="nav-link carrito" href="shopping-cart.php"><span class="d-block d-md-none"></span><i class="icon ion-md-cart"></i></a>
         <div id="homeCarousel<?=$id?>" class="carousel slide" data-ride="carousel">
         </div>
     </div>
     </div>
      <div class="col-6 ">
        <p> <?=$descripcion?> <br> <?=$ubicacion?></p>

      </div>
     </div>

     <!-- (fin) pie de producto -->

</div>
</div>