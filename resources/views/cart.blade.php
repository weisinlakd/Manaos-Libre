@extends('layouts.default')

@section('php')
<?php
    $titulo = 'Mi Carrito';
    $producto = false;
?>
@endsection

@section('content')
<section class="page-add cart-page-add">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="page-breadcrumb">
            <h2>Mi Carrito<span>.</span></h2>
            <a href="#">Home</a>
            <a href="#">Ropa</a>
            <a class="active" href="#">Ropa Informal</a>
          </div>
        </div>
        <div class="col-lg-8">
          <img src="../img/banner-placeholder.jpg" alt="descuento/anuncio">
        </div>
      </div>
    </div>
  </section>

  <div class="cart-page">
    <div class="container">
      <div class="cart-table">
        <table>
          <thead>
            <tr>
              <th class="product-h">Producto</th>
              <th>Precio</th>
              <th class="quan">Cantidad</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="product-col">
                <img src="../img/banner-placeholder.jpg" alt="producto wacho">
                <div class="p-title">
                <h5>Remera de River</h5>
                </div>
              </td>
              <td class="price-col">$29</td>
              <td class="quantity-col">
                <div class="pro-qty">
                <input type="text" value="1">
                </div>
              </td>
              <td class="total">$29</td>
              <td class="product-close">x</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="cart-btn">
          <div class="row">
            <div class="col-lg-6">
              <div class="coupon-input">
                <input type="text" placeholder="Ingresá el código del cupón">
              </div>
            </div>
            <div class="col-lg-5 offset-lg-1 text-left text-lg-right">
              <div class="site-btn clear-btn">Limpiar Carrito</div>
              <div class="site-btn update-btn">Actualizar</div>
            </div>
          </div>
        </div>
      </div>
  <div class="shopping-method">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="shipping-info">
            <h5>Elegí tu método de envío</h5>
            <div class="chose-shipping">
              <div class="cs-item">
                <input type="radio" name="cs" id="one">
                <label for="one" class="active">
                Envío Gratis
                <span>Estimar demora a Cba</span>
                </label>
              </div>
              <div class="cs-item">
                <input type="radio" name="cs" id="two">
                <label for="two">
                Envío Xpress $10
                </label>
              </div>
              <div class="cs-item last">
                <input type="radio" name="cs" id="three">
                <label for="three">
                Retiro en Sucursal
                </label>
              </div>
            </div>
          </div>
          <div class="total-info">
            <div class="total-table">
              <table>
                <thead>
                  <tr>
                    <th>Total</th>
                    <th>Subtotal</th>
                    <th>Envío</th>
                    <th class="total-cart">Total Cart</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td class="total">$29</td>
                    <td class="sub-total">$29</td>
                    <td class="shipping">$10</td>
                    <td class="total-cart-p">$39</td>
                    </tr>
                  </tbody>
                  </table>
              </div>
              <div class="row">
                <div class="col-lg-12 text-right">
                  <a href="check-out.php" class="primary-btn chechout-btn">Proceder al pago</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{--  --}}

  <table id="cart" class="table table-hover table-condensed">
    <thead>
    <tr>
        <th style="width:50%">Product</th>
        <th style="width:10%">Price</th>
        <th style="width:8%">Quantity</th>
        <th style="width:22%" class="text-center">Subtotal</th>
        <th style="width:10%"></th>
    </tr>
    </thead>
    <tbody>

    <?php $total = 0 ?>

    @if(session('cart'))
        @foreach(session('cart') as $id => $details)

            <?php $total += $details['precio'] * $details['quantity'] ?>

            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['foto'] ?? '/img/placeholder-home.jpg'}}" width="100" height="100" class="img-responsive"/></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="precio">${{ $details['precio'] }}</td>
                <td data-th="Quantity">
                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                </td>
                <td data-th="Subtotal" class="text-center">${{ $details['precio'] * $details['quantity'] }}</td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
        @endforeach
    @endif

    </tbody>
    <tfoot>
    <tr class="visible-xs">
        <td class="text-center"><strong>Total {{ $total }}</strong></td>
    </tr>
    <tr>
        <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
    </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
 
 
    <script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>
 
@endsection