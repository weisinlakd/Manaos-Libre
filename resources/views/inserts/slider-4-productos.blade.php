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
                  @for ($i = 0; $i < 3; $i++)
                      
                  @if ($i === 0)
                      <div class="carousel-item active">
                      
                  @else
                      <div class="carousel-item">
                  @endif
                  
                  <div class="row">
                    @foreach ($productos as $producto)
                      
                    
                    {{-- $producto = $productos[$i];?> --}}
                    @include('inserts.producto-home')
                    
                    @endforeach
                      
                    </div>
                    <br></div>
                    @endfor
                  
                  
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