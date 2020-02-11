<div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2><b><?=$titulo?></b></h2>
                <br>
                <div id="myCarousel<?=$id?>" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel<?=$id?>" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel<?=$id?>" data-slide-to="1"></li>
                  <li data-target="#myCarousel<?=$id?>" data-slide-to="2"></li>
                </ol>   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                  <div class="item carousel-item active">
                    <div class="row">
                      <?php for ($i=0;$i < count($masVotados); $i++) {
                        if ($i == 4) break;
                        $idProducto = $masVotados[$i]->id();
                        // $rand = rand(0,3);
                        $imagen = $foto->getFotoProductoByIdProducto($pdo, $idProducto)[0];

                        if (is_object($imagen)){
                          $imagen = $imagen->path;
                        } else $imagen = "../img/placeholder-home.jpg";
                        // var_dump($imagen);
                        // die;
                        $tituloProd = $masVotados[$i]->name();
                        $precio = $masVotados[$i]->precio();
                        $alt = $masVotados[$i]->descripcion();
                        require('producto-home.php');
                      }
                      ?>
                    </div>
                  <br></div>
                  <div class="item carousel-item">
                    <div class="row">
                      <?php for ($i=4;$i < count($masVotados); $i++) {
                        if ($i == 8) break;
                        $idProducto = $masVotados[$i]->id();
                        // $rand = rand(0,3);
                        $imagen = $foto->getFotoProductoByIdProducto($pdo, $idProducto)[0];
                        if (is_object($imagen)){
                          $imagen = $imagen->path;
                        } else $imagen = "../img/placeholder-home.jpg";
                        $tituloProd = $masVotados[$i]->name();
                        $precio = $masVotados[$i]->precio();
                        $alt = $masVotados[$i]->descripcion();
                        require('producto-home.php');
                      }
                      ?>				
                    </div>
                  <br></div>
                  <div class="item carousel-item">
                    <div class="row">
                      <?php for ($i=8;$i < count($masVotados); $i++) {
                        // if ($i == 8) break;
                        $idProducto = $masVotados[$i]->id();
                        // $rand = rand(0,3);
                        $imagen = $foto->getFotoProductoByIdProducto($pdo, $idProducto)[0];
                        if (is_object($imagen)){
                          $imagen = $imagen->path;
                        } else $imagen = "../img/placeholder-home.jpg";
                        $tituloProd = $masVotados[$i]->name();
                        $precio = $masVotados[$i]->precio();
                        $alt = $masVotados[$i]->descripcion();
                        require('producto-home.php');
                      }
                      ?>
                    </div>
                  </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev hola" style="color: black;" href="#myCarousel<?=$id?>" data-slide="prev">
                  <i style="font-size: 50px;" class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next hola" style="color: black;" href="#myCarousel<?=$id?>" data-slide="next">
                  <i style="font-size: 50px;" class="fa fa-angle-right"></i>
                </a>
              </div>
              </div>
            </div>
          </div>