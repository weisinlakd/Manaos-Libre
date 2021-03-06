<div class="col-sm-2 col-md-3">
    <div class="thumb-wrapper">
        <div class="img-box">
            {{-- {{dd($producto->fotos[0]->nombre)}} --}}
            <a href="/producto/{{$producto->id}}">
                @if (!$producto->fotos->isEmpty())
                    <img src="/storage/{{$producto->fotos[0]->nombre}}" class="img-responsive img-fluid img-home" alt="{{$producto->descripcion}}" >
                @else 
                    <img src="/img/placeholder-home.jpg" class="img-responsive img-fluid img-home" alt="{{$producto->descripcion}}">
                @endif
            </a>
        </div>
        <div class="thumb-content">
            <br>
            <h4>{{$producto->name}}</h4>
            
            <p class="item-price">
                <div class="col-1"></div>
                <?php if (isset($ofertas)) :?>
                    <strike style="color: red">${{$producto->precio}}</strike> 
                    <span class="importante">${{$producto->precio -(($producto->precio / 100) *20)}}</span>
                <?php else : ?> 
                    <span class="importante" >${{$producto->precio}}</span>
                <?php endif ?>
            </p>
            
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    @isset($compras)
                    
                    @else
                    <?php
                    $idProducto = $producto->id;
                    $valoracion = floor($producto->valoracion/2);
                    ?>
                    @include('inserts.ratings-detalle')
                    
                    @endisset 
                </div>
            </div>
            <br>
            @isset($compras)
            <a href="/producto/{{$producto->id}}" class="btn btn-primary pull-right">></a>  
            @else
            <div class="row">
                <div class="col-1"></div>
                <a href="/producto/{{$producto->id}}" class="btn btn-primary">Ver</a>  
                <div class="col-1"></div>
                <a href="/add-to-cart/{{$producto->id}}" class="btn btn-primary">Comprar</a>
            </div>
            @endisset
        </div>						
    </div>
    <br>
</div>