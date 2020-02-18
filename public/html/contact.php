
<!DOCTYPE html>
<html lang="zxx">
	
	<?php
		session_start();
		require_once('classes/Usuario.php');
		$usuario = $usuario = isset($_SESSION['usuario']) ? unserialize($_SESSION["usuario"]) : false;
		if ($usuario) $usuarioLog = true;
		$titulo = "Contacto";
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
	 require_once('anuncios.php');
	 $tituloPag = 'Contacto';
	 require_once('anuncioYtitulo.php');	 
	?>


	<div class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<form action="#" class="contact-form">
						<div class="row">
							<div class="col-lg-6">
								<input type="text" placeholder="Nombre(s)">
							</div>
							<div class="col-lg-6">
								<input type="text" placeholder="Apellido(s)">
							</div>
							<div class="col-lg-12">
								<input type="email" placeholder="E-mail">
								<input type="text" placeholder="Asunto">
								<textarea placeholder="Mensaje"></textarea>
							</div>
							<div class="col-lg-12 text-right">
								<button type="submit">Enviar</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-3 offset-lg-1">
					<div class="contact-widget">
						<div class="cw-item">
							<h5>Ubicación</h5>
							<ul>
								<li>Tremenda Calle 563, </li>
								<li>Córdoba, ARG</li>
							</ul>
						</div>
						<div class="cw-item">
							<h5>Teléfono</h5>
							<ul>
								<li>+54351 535-459222</li>							
							</ul>
						</div>
						<div class="cw-item">
							<h5>E-mail</h5>
							<ul>
								<li>a@abc.com</li>
								<li>www.manaos-libre.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="map">
				<div class="row">
					<div class="col-lg-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sCordoba%20Argentina%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd" height="560" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
			</div> -->
		</div>
	</div>


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