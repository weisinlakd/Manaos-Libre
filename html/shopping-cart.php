<!DOCTYPE html>
<html lang="zxx">

  <?php 
    $titulo = 'Mi Carrito';
    $producto = false;
    require_once('head.php');
  ?>

  <body>
    <?php 
      require_once('header.php');
      require_once('anuncios.php');
    ?>
  
    


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


    <?php require_once('footer.php');?>
      
      
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