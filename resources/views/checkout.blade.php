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
                        @error('uno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
                                    <input type="checkbox" name="cc-selected" id="cc-selected" checked>
                                    <label for="cc-selected">Seleccionar para pagar con tarjeta</label>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="cc-name">Nombre del titular</label>
                                          <input type="text" name="cc-name"  class="form-control tarjeta @error('cc-name') is-invalid @enderror" id="cc-name" placeholder="" required  value="{{old('cc-name')}}">
                                          <small class="text-muted">Nombre impreso en la tarjeta</small>
                                            @error('cc-name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="cc-number">Numero de la tarjeta</label>
                                          <input type="number" name="cc-number"  class="form-control tarjeta @error('cc-name') is-invalid @enderror" id="cc-number" placeholder="" required value="{{old('cc-number')}}">
                                            @error('cc-number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-3 mb-3">
                                          <label for="cc-expiration">Fecha de Vencimiento</label>
                                          <input type="string" name="cc-expiration" class="form-control tarjeta @error('cc-expiration') is-invalid @enderror" id="cc-expiration" placeholder="MM/YY" required value="{{old('cc-expiration')}}">
                                            @error('cc-expiration')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="cc-cvv">CVV</label>
                                          <input type="number" name="cc-cvv"  class="form-control tarjeta @error('cc-cvv') is-invalid @enderror" id="cc-cvv" placeholder="XXX" required value="{{old('cc-cvv')}}">
                                            @error('cc-cvv')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
                                        <div class="col-md-12 mb-6">
                                          <label for="tb-name">Nombre del titular</label>
                                          <input type="text"   name="tb-name" class="form-control transferencia @error('tb-name') is-invalid @enderror" id="tb-name" placeholder=""  value="{{old('tb-name')}}">
                                          @error('tb-name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    
                                      </div>
                                      <div class="row">
                                        
                                        <div class="col-md-12 mb-6">
                                          <label for="tb-cbu">CBU</label>
                                          <input type="number"  name="tb-cbu"  class="form-control transferencia @error('tb-cbu') is-invalid @enderror" id="tb-cbu" placeholder="" value="{{old('tb-cbu')}}">
                                          @error('tb-cbu')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        <br>
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
                                          <input type="text" name="pf-name" class="form-control pagoFacil @error('pf-name') is-invalid @enderror" id="pf-name" placeholder="" value="{{old('pf-name')}}">
                                          @error('pf-name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
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

    //FALTA SACAR LOS CHECKS
    $('#tb-selected').click(()=>{
        $('.tarjeta').removeAttr('required');
        $('.pagoFacil').removeAttr('required');
        $('.transferencia').attr('required', 'required');
        $('#cc-selected').prop('checked', false);
        $('#pf-selected').prop('checked', false);
    })

    $('#pf-selected').click(()=>{
        $('.tarjeta').removeAttr('required');
        $('.transferencia').removeAttr('required');
        $('.pagoFacil').attr('required', 'required');
        $('#cc-selected').prop('checked', false);
        $('#tb-selected').prop('checked', false);
    })

    $('#cc-selected').click(()=>{
        $('.pagoFacil').removeAttr('required');
        $('.transferencia').removeAttr('required');
        $('.tarjeta').attr('required', 'required');
        $('#pf-selected').prop('checked', false);
        $('#tb-selected').prop('checked', false);
    })

    $(function() {
    $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
@endsection