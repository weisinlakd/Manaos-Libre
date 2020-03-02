@extends('layouts.default')

@section('php')
<?php 
$titulo = "Check Out";
$producto = false;
$tituloPag = "Completá tus datos";
?>
@endsection

@section('content')
@include('inserts.anuncioYtitulo')

<section class="cart-total-page spad">
    <div class="container">
        <form action="#" class="checkout-form">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <h2 style="border-bottom: 2px solid #d0d7db; padding-bottom: 15px;  font-size: 48px;">Checkout <span style="color:#b0bcc2">.</span></h2>
                </div>
                
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Nombre   *</p>
                        </div>
                        <div class="col-lg-5">
                            <input type="text" placeholder="Nombre(s)" value="{{Auth::user()->name}}">
                        </div>
                        <div class="col-lg-5">
                            <input type="text" placeholder="Apellido(s)" value="{{Auth::user()->apellido ?? ''}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Dirección*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" placeholder="Dirección" value="{{Auth::user()->direccion->direccion ?? ''}}">
                            
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
                            <input type="text" value="{{Auth::user()->direccion->ciudad->nombre ?? ''}}">
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
                            <input type="text" value="{{Auth::user()->telefono ?? ''}}">
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
                                    <li><label for="efectivo">Paypal <img src="../img/paypal.jpg" alt="paypal"></label><input type="radio" name="efectivo" id="efectivo"></li>
                                    <li><label for="tarjeta">Tarjeta de Crédito / Débito <img src="../img/mastercard.jpg" alt="master"></label><input type="radio" name="tarjeta" id="tarjeta"></li>
                                    <li>
                                        <label for="two">Transferencia Bancaria</label>
                                        <input type="radio" id="two">
                                    </li>
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
                        <ul>
                            <li><label for="efectivo">Paypal <img src="../img/paypal.jpg" alt="paypal"></label><input type="radio" name="efectivo" id="efectivo"></li>
                            <li><label for="tarjeta">Tarjeta de Crédito / Débito <img src="../img/mastercard.jpg" alt="master"></label><input type="radio" name="tarjeta" id="tarjeta"></li>
                            <li>
                                <label for="two">Transferencia Bancaria</label>
                                <input type="radio" id="two">
                            </li>
                        </ul>
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
    </script>
@endsection