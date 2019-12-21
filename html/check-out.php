<!DOCTYPE html>
<html lang="zxx">

  <?php
    $titulo = "Check Out";
    $producto = false;
    require_once('head.php'); 
  ?>

  <body>

	<!-- <div id="preloder">
		<div class="loader"></div>
	</div>

	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
			<input type="text" id="search-input" placeholder="Buscar Productos...">
			</form>
		</div>
	</div> -->

  <?php
    require_once('header.php');
  ?>

<?php 
  $tituloPag = "Completá tus datos";
  require_once('anuncios.php');
?>

    
    
    <section class="cart-total-page spad">
    <div class="container">
    <form action="#" class="checkout-form">
    <div class="row">
    <div class="col-lg-12">
      <br>
    <h2 style="border-bottom: 2px solid #d0d7db; padding-bottom: 15px;  font-size: 48px;">Completá Tus datos <span style="color:#b0bcc2">.</span></h2>
    </div>
    
    <div class="col-lg-9">
    <div class="row">
    <div class="col-lg-2">
    <p class="in-name">Nombre   *</p>
    </div>
    <div class="col-lg-5">
    <input type="text" placeholder="Nombre(s)">
    </div>
    <div class="col-lg-5">
    <input type="text" placeholder="Apellido(s)">
    </div>
    </div>
    <div class="row">
    <div class="col-lg-2">
    <p class="in-name">Dirección*</p>
    </div>
    <div class="col-lg-10">
    <input type="text">
    <input type="text">
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
    <input type="text">
    </div>
    </div>
    <div class="row">
    <div class="col-lg-2">
    <p class="in-name">Provincia</p>
    </div>
    <div class="col-lg-10">
    <input type="text">
    </div>
    </div>
    <div class="row">
    <div class="col-lg-2">
    <p class="in-name">Código Postal*</p>
    </div>
    <div class="col-lg-10">
    <input type="text">
    </div>
    </div>
    <div class="row">
    <div class="col-lg-2">
    <p class="in-name">Teléfono*</p>
    </div>
     <div class="col-lg-10">
    <input type="text">
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12 text-right">
    <div class="diff-addr">
    <input type="radio" id="one">
    <label for="one">Envío a otra dirección</label>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="order-table">
    <div class="cart-item">
    <span>Producto(s)</span>
    <p class="product-name">Manaos</p>
    </div>
    <div class="cart-item">
    <span>Precio</span>
    <p>$29</p>
    </div>
    <div class="cart-item">
    <span>Cantidad</span>
    <p>1</p>
    </div>
    <div class="cart-item">
    <span>Envío</span>
    <p>$10</p>
    </div>
    <div class="cart-total">
    <span>Total</span>
    <p>$39</p>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="payment-method">
    <h3>Método de Pago</h3>
    <ul>
    <li>Paypal <img src="../img/paypal.jpg" alt="paypal"></li>
    <li>Tarjeta de Crédito / Débito <img src="../img/mastercard.jpg" alt="master"></li>
    <li>
    <label for="two">Pago al recibir el producto</label>
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


    <?php 
      require_once('footer.php');
    ?>
    
    
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