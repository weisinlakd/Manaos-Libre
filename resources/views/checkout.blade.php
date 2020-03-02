@extends('layouts.default')

@section('php')
<?php 
$titulo = "Check Out";
$producto = false;
$tituloPag = "Completá tus datos";
?>

@endsection
@section('style')
    <style>
        .rounded {
    border-radius: 1rem
}

.nav-pills .nav-link {
    color: #555
}

.nav-pills .nav-link.active {
    color: white
}

input[type="radio"] {
    margin-right: 5px
}

.bold {
    font-weight: bold
}
    </style>
@endsection

@section('content')
@include('inserts.anuncioYtitulo')

<section class="cart-total-page spad">
    <div class="container">
        <form action="/procesarPago" class="checkout-form" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <h2 style="border-bottom: 2px solid #d0d7db; padding-bottom: 15px;  font-size: 48px;">Checkout <span style="color:#b0bcc2">.</span></h2>
                </div>
                
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Nombre*</p>
                        </div>
                        <div class="col-lg-5">
                            <input  name="name" type="text" placeholder="Nombre(s)" value="{{Auth::user()->name}}">
                        </div>
                        <div class="col-lg-5">
                            <input  name="apellido" type="text" placeholder="Apellido(s)" value="{{Auth::user()->apellido ?? ''}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Dirección*</p>
                        </div>
                        <div class="col-lg-10">
                            <input name="direccion"  type="text" placeholder="Dirección" value="{{Auth::user()->direccion->direccion ?? ''}}">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">País*</p>
                        </div>
                        <div class="col-lg-10">
                            <select class="cart-select country-usa">
                                <option>Argentina</option>
                                <option>Uruguay</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Ciudad*</p>
                        </div>
                        <div class="col-lg-10">
                            <input name="ciudad"  type="text" value="{{Auth::user()->direccion->ciudad->nombre ?? ''}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Provincia</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" value="{{Auth::user()->direccion->ciudad->provincia ?? ''}}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Teléfono*</p>
                        </div>
                        <div class="col-lg-10">
                            <input  name="telefono" type="text" value="{{Auth::user()->telefono ?? ''}}">
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="diff-addr">
                                <input type="radio" id="one">
                                <label for="one">Envío a otra dirección</label>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="payment-method">
                                <h3>Método de Envío</h3>
                                <ul>
                                    <label for="metodo_envio"><h4>Elegí tu forma de envío</h4></label><br>
                                    <span class="text-muted">Demora / Método / Empresa / Sucursal / Precio</span>
                                    <select name="metodo_envio" id="metodo_envio"  class="js-example-basic-single" placeholder="buscá tu método" value='{{old('metodo_envio')}}'>
                                    @foreach ($metodosEnvio as $metodoEnvio)
                                    <option value="<?=$metodoEnvio->id?>" name="metodoEnvio_id" > {{floor($metodoEnvio->tiempo_envio / 24)}} días || <?=$metodoEnvio->name?> || {{$metodoEnvio->empresa->name}} || {{$metodoEnvio->empresa->direccion->direccion}}, {{$metodoEnvio->empresa->direccion->ciudad->nombre}}, {{$metodoEnvio->empresa->direccion->ciudad->provincia}} || ${{$metodoEnvio->costo_envio}}</option> 
                                    @endforeach
                                    </select>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="order-table">
                        <?php $total = 0 ?>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)

                                <?php $total += $details['precio'] * $details['quantity'] ?>

                                <div class="cart-item">
                                    <span>Producto(s)</span>
                                    <p class="product-name">{{ $details['name'] }}</p>
                                </div>
                                
                                <div class="cart-item">
                                    <span>Precio</span>
                                    <p>${{ $details['precio'] }}</p>
                                </div>

                                <div class="cart-item">
                                    <span>Cantidad</span>
                                    <p>{{ $details['quantity'] }}</p>
                                </div>  

                                <div class="cart-item">
                                    <span>Subtotal</span>
                                    <p>${{ $details['precio'] * $details['quantity'] }}</p>
                                </div>
                                <div class="cart-total"></div>
                            @endforeach
                        @endif
                        
                        <div class="cart-item">
                            <span>Envío</span>
                            <p>$10</p>
                        </div>
                        <div class="cart-total">
                            <span>Total</span>
                            <p>${{$total}}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-method">
                        <h3>Método de Pago</h3>
                        <div class="col-sm-9">

                            <ul class="nav navbar nav-tabs" id="myTab">
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     Seleccioná tu Método
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" data-toggle="tab" href="#tarjeta">Tarjeta </a>
                                      <a class="dropdown-item" data-toggle="tab" href="#transferencia">Transferencia</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" data-toggle="tab" href="#pago_facil">Pago Fácil</a>
                                    </div>
                                </li>
                            </ul>
                
                            <div class="tab-content">
                                <div class="tab-pane active" id="tarjeta">
                                    <h2>Tarjeta</h2>
                                    <input type="checkbox" name="cc-selected" id="cc-selected">
                                    <label for="cc-selected">Seleccionar para pagar con tarjeta</label>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="cc-name">Nombre del titular</label>
                                          <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                          <small class="text-muted">Nombre impreso en la tarjeta</small>
                                          <div class="invalid-feedback">
                                            Name on card is required
                                          </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="cc-number">Numero de la tarjeta</label>
                                          <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                          <div class="invalid-feedback">
                                            Credit card number is required
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-3 mb-3">
                                          <label for="cc-expiration">Fecha de Vencimiento</label>
                                          <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                          <div class="invalid-feedback">
                                            Expiration date required
                                          </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="cc-expiration">CVV</label>
                                          <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                          <div class="invalid-feedback">
                                            Security code required
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <!--/table-resp-->
            
                                <hr>
            
                                <div class="tab-pane" id="transferencia">
                                    <h2>Transferencia Bancaria</h2>
                                    <input type="checkbox" name="tb-selected" id="tb-selected">
                                    <label for="tb-selected">Seleccionar para pagar con transferencia</label>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="tb-name">Nombre del titular</label>
                                          <input type="text" class="form-control" id="tb-name" placeholder="" >
                                          <div class="invalid-feedback">
                                            Name on card is required
                                          </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="tb-number">Cuenta Bancaria</label>
                                          <input type="text" class="form-control" id="tb-number" placeholder="" >
                                          <div class="invalid-feedback">
                                            Credit card number is required
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-3 mb-3">
                                          <label for="tb-alias">Alias</label>
                                          <input type="text" class="form-control" id="tb-alias" placeholder="" >
                                          <div class="invalid-feedback">
                                            aliasrequired
                                          </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="tb-expiration">CVU</label>
                                          <input type="text" class="form-control" id="tb-cvu" placeholder="" >
                                          <div class="invalid-feedback">
                                            CVU required
                                          </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="tb-expiration">dni</label>
                                            <input type="text" class="form-control" id="tb-dni" placeholder="" >
                                            <div class="invalid-feedback">
                                              Security code required
                                            </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="tab-pane" id="pago_facil">
                                    <h2>Pago Fácil</h2>
                                    <input type="checkbox" name="pf-selected" id="pf-selected">
                                    <label for="pf-selected">Seleccionar para pagar con PagoFacil</label>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="pf-name">Nombre</label>
                                          <input type="text" class="form-control" id="pf-name" placeholder="" >
                                          <div class="invalid-feedback">
                                            Name on card is required
                                          </div>
                                        </div>
                                        
                                        
                                      </div>
                                </div>
                            </div>
                        </div>
                        
                              
                        <button type="submit">Realizar Compra</button>
                    </div>
                </div>
            </div>

            
        </form>
    </div>
</section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
        $('.js-example-basic-single').selectize({
            sortField: 'text'
        });
    });

    // $('#cc-selected').click(()=>{
    //     $('#tb-name').
    // })

    $(function() {
    $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
@endsection