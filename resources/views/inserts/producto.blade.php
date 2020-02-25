<div class=" col-xs-12 col-md-6 ">
      <div class="row container m-0 no-gutters img-fluid"><!-- Slider de Imagenes -->
        <div class="col-12 img-fluid">
          <div id="homeCarousel-{{$producto->id}}" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#homeCarousel-{{$producto->id}}" data-slide-to="0" class="active"></li>
              <li data-target="#homeCarousel-{{$producto->id}}" data-slide-to="1"></li>
              <li data-target="#homeCarousel-{{$producto->id}}" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              @if ($producto->fotos->isEmpty())
              <?php 
              $foto = new stdClass();
              $foto->nombre = "../img/placeholder-home.jpg";
              $producto->fotos->push($foto);
              ?>
              @endif
              @foreach ($producto->fotos as $foto)
                @if ($loop->first)
                  <div class="carousel-item active">
                    
                @else
                    <div class="carousel-item">
                @endif
                    <div class="d-block d-md-none img-fluid">
                        <img src="/storage/{{$foto->nombre}}" class="d-block w-100 img-lista" alt="...">
                    </div>
                    <div class="d-none d-md-block d-xl-block">
                        <img src="/storage/{{$foto->nombre}}" class="d-block w-100 img-lista " alt="...">
                    </div>
                  </div>
              @endforeach

              {{-- <div class="carousel-item active">
                <div class="d-block d-md-none img-fluid">
                  <!--  -->
                  <img src="" class="d-block w-100 img-lista" alt="...">
                </div>
                <div class="d-none d-md-block d-xl-block">
                  <!--  -->
                  <img src="" class="d-block w-100 img-lista" alt="...">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-block d-md-none">
                  <img src="" class="d-block w-100 img-lista" alt="...">
                </div>
                <div class="d-none d-md-block d-xl-block">
                  <!--  -->
                  <img src="" class="d-block w-100 img-lista" alt="...">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-block d-md-none">
                  <img src="" class="d-block w-100 img-lista" alt="...">
                </div>
                <div class="d-none d-md-block d-xl-block">
                  <!--  -->
                  <img src="" class="d-block w-100 img-lista" alt="...">
                </div>
              </div> --}}
            </div>
            <a class="carousel-control-prev" href="#homeCarousel-{{$producto->id}}" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#homeCarousel-{{$producto->id}}" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
     </div><!-- (Fin) Slider de Imagenes -->
     <!-- (inicio) pie de producto -->
     <div class="row col-12 ">
     <div class="col-12 row">
       <div class="col-11">
       <h1><a style="color: black; text-decoration: none;" href="/producto/{{$producto->id}}">{{$producto->name}}</a></h1><h2>${{$producto->precio}}</h2>
       </div>
     <div class="col-1">
       <a class="nav-link carrito" href="/add-to-cart/{{$producto->id}}"><span class="d-block d-md-none"></span><i class="icon ion-md-cart"></i></a>
         <div id="homeCarousel-{{$producto->id}}" class="carousel slide" data-ride="carousel">
         </div>
     </div>
     </div>
      <div class="col-6 ">
        <ul>

          <p> <div overflow="hidden"><i class="icon ion-md-list"></i> {{$producto->descripcion}} </div>
            <br> <i class="icon ion-md-pin"></i> {{$producto->ciudad->nombre}} 
            <br> <i class="fa fa-user"></i> {{$producto->usuario->name}}
            @if ($producto->valoracion != false)
              <br> <i class="fa fa-star"></i> {{$producto->valoracion}}
            @else 
              <br> <i class="fa fa-star"></i> No hay valoraciones
            @endif
            @if ($producto->is_usado)
              <br> <i class="fa fa-tag"></i> Usado
            @else 
              <br> <i class="fa fa-tag"></i> Nuevo
            @endif
          </p>
        </ul>
          


      </div>
     </div>

     <!-- (fin) pie de producto -->

</div>
</div>