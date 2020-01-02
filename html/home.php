<!doctype html>
<html lang="en">
  <?php
  
    session_start();
    //var_dump($_SESSION);


    require_once('hayUsuario.php');
    //var_dump($_SESSION);
    // echo '<br>';
    // var_dump($usuario);
     
    //var_dump($usuario);
    // echo 'sesion <br>';
    // var_dump($_SESSION);
    //  echo '<br>';
    //  var_dump($usuario);
    // $usuarioLog = true;

    //var_dump($usuario);
    
    $titulo = "Home";
    // $usuarioLog = rand(0,1);
    $producto = false;
    require_once('head.php');
    
  ?><style>
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


  </style>
  <body>

      <!-- <div id="preloder">
          <div class="loader"></div>
      </div> -->

    <div class="container-fluid caja p-0 m-0"><!-- Contenedor -->
      <?php 
        require_once('header.php');
      ?>

      <div class="row m-0 no-gutters"><!-- Slider de Imagenes -->
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
        </div>
      </div><!-- (Fin) Slider de Imagenes -->

      <div class="row col-12 p-3 text-center m-0"><!-- Informacion General -->
        

        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2>Más <b>Vendidos</b></h2>
                <br>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                  <div class="item carousel-item active">
                    <div class="row">
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Apple iPad</h4>
                            <p class="item-price"><span>$369.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      <br></div>
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Sony Headphone</h4>
                            <p class="item-price"> <span>$23.99</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      <br></div>		
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Macbook Air</h4>
                            <p class="item-price"> <span>$649.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      <br></div>								
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Nikon DSLR</h4>
                            <p class="item-price"> <span>$250.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      </div>
                    </div>
                  <br></div>
                  <div class="item carousel-item">
                    <div class="row">
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Sony Play Station</h4>
                            <p class="item-price"><span>$269.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      <br></div>
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Macbook Pro</h4>
                            <p class="item-price"><span>$869.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      <br></div>
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Bose Speaker</h4>
                            <p class="item-price"> <span>$99.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      <br></div>
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Samsung Galaxy S8</h4>
                            <p class="item-price"> <span>$569.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      </div>						
                    </div>
                  <br></div>
                  <div class="item carousel-item">
                    <div class="row">
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Apple iPhone</h4>
                            <p class="item-price"> <span>$349.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      <br></div>
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Canon DSLR</h4>
                            <p class="item-price"> <span>$250.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      <br></div>
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Google Pixel</h4>
                            <p class="item-price"> <span>$418.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      <br></div>	
                      <div class="col-sm-2 col-md-3">
                        <div class="thumb-wrapper">
                          <div class="img-box">
                            <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                          </div>
                          <div class="thumb-content">
                            <h4>Apple Watch</h4>
                            <p class="item-price"> <span>$330.00</span></p>
                            <div class="star-rating">
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                          </div>						
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev hola" style="color: black;" href="#myCarousel" data-slide="prev">
                  <i style="font-size: 50px;" class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next hola" style="color: black;" href="#myCarousel" data-slide="next">
                  <i style="font-size: 50px;" class="fa fa-angle-right"></i>
                </a>
              </div>
              </div>
            </div>
          </div>

          <br>
          <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <br>
                  <h2>Mejores <b>Ofertas</b></h2>
                  <br>
                  <div id="ofertasCarrusel" class="carousel slide" data-ride="carousel" data-interval="0">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#ofertasCarrusel" data-slide-to="0" class="active"></li>
                    <li data-target="#ofertasCarrusel" data-slide-to="1"></li>
                    <li data-target="#ofertasCarrusel" data-slide-to="2"></li>
                  </ol>   
                  <!-- Wrapper for carousel items -->
                  <div class="carousel-inner">
                    <div class="item carousel-item active">
                      <div class="row">
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Apple iPad</h4>
                              <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        <br></div>
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Sony Headphone</h4>
                              <p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        <br></div>		
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Macbook Air</h4>
                              <p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        <br></div>								
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Nikon DSLR</h4>
                              <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        </div>
                      </div>
                    <br></div>
                    <div class="item carousel-item">
                      <div class="row">
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Sony Play Station</h4>
                              <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        <br></div>
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Macbook Pro</h4>
                              <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        <br></div>
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Bose Speaker</h4>
                              <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        <br></div>
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Samsung Galaxy S8</h4>
                              <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        </div>						
                      </div>
                    <br></div>
                    <div class="item carousel-item">
                      <div class="row">
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Apple iPhone</h4>
                              <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        <br></div>
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Canon DSLR</h4>
                              <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        <br></div>
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Google Pixel</h4>
                              <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        <br></div>	
                        <div class="col-sm-2 col-md-3">
                          <div class="thumb-wrapper">
                            <div class="img-box">
                              <img src="../img/placeholder-vertical.png" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Apple Watch</h4>
                              <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
                            </div>						
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Carousel controls -->
                  <a class="carousel-control left carousel-control-prev hola" style="color: black;" href="#ofertasCarrusel" data-slide="prev">
                    <i style="font-size: 50px;" class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control right carousel-control-next hola" style="color: black;" href="#ofertasCarrusel" data-slide="next">
                    <i style="font-size: 50px;" class="fa fa-angle-right"></i>
                  </a>
                </div>
                </div>
              </div>
            </div>        

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
