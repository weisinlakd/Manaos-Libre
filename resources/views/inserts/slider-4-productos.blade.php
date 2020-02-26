<div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2><b><?=$subtitulo?></b></h2>
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
                  
                  <?php 
                    $isActive = true;
                    $contadorProductos = 0;
                    ?>
                          @foreach ($productos as $producto)
                          @if ($loop->first)
                            <div class="carousel-item active">
                              <div class="row">
                                
                          @endif
                          @include('inserts.producto-home') 
                          <?php 
                          
                              $contadorProductos++;
                              if ($loop->last) {
                                continue;
                              }
                              if($contadorProductos === 4) {
                                echo '</div> </div>
                                <div class="carousel-item">
                                  <div class="row">';
                                $contadorProductos = 0;
                              }
                          ?>
                          {{-- $producto = $productos[$i];?> --}}
                           
                          
                          @endforeach
                        </div>
                      
                 
                      {{-- <div class="carousel-item"> --}}
                  
                  
                      
                    <br></div>
                    
                  
                  
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