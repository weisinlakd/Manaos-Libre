<?php  //var_dump($_COOKIE['noExiste']);?>
<!doctype html>
<html lang="en">
<head>
  <?php 

  $focoPass = isset($_COOKIE['passCambiada']) ? 'autofocus' : '';
  $focoEmail = isset($_COOKIE['passCambiada']) ? '' : 'autofocus';
  $noExiste = isset($_COOKIE['noExiste']) ? $_COOKIE['noExiste'] : false;
  // var_dump($_COOKIE['loginMalo']);
  //var_dump($_COOKIE['emailIngresado']);
  $mensaje = false;
  if (isset($_COOKIE['loginMalo'])){
    $mensaje = 'El Usuario y/o contraseña no se han ingresado correctamente.';
  }

  $email = '';
  $checked ='';

  if (isset($_COOKIE['emailIngresado'])){
    $email = $_COOKIE['emailIngresado'];
  }

  if (isset($_COOKIE['remember-me']) && isset($_COOKIE['emailCorrecto'])){
    $email = $_COOKIE['emailCorrecto'];
    $checked = 'checked';
    //$autofocus = 'autofocus';
  }
  
  ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Manaos Libre</title>
  <link rel="shortcut icon" type="image/x-icon" href="../img/logosolo.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <!-- Bootstrap core CSS -->
  <!-- <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  
  
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="../css/signin.css" rel="stylesheet">
  <link href="../css/common.css" rel="stylesheet"><!-- Necesario para barra de navegación y paleta de colores -->
  
  
</head>
<body class="text-center color-4">
  <form  action="resultadoSign-in.php" class="form-signin" method="post">
    <a href="home.php"><img class="mb-4" src="../img/logosolo.png" alt="" width="72" height="72"></a>
    <h1 class="h3 mb-3 font-weight-normal">Manaos Libre</h1>
    <label for="inputEmail" class="sr-only">Email</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required <?=$focoEmail?> value='<?=$email?>' >
      <!-- <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus value=""> -->
    <label for="inputPassword" class="sr-only">Contraseña</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required <?=$focoPass?> value="">
    
      <?php 
        if ($mensaje) :?>
      <a href="recuperarPassword.php">Olvidé mi contraseña </a>
      <p style="color: red"><?=$mensaje?> </p>
      
      <?php endif ?>

      <?php 
        if ($noExiste) :?>
      
      <p style="color: red"><?=$noExiste?> </p>
      
      <?php endif ?>
          
      <div class="checkbox mb-3">
      <label>
        <input name="remember-me" type="checkbox" value="remember-me" <?=$checked?>> Recuérdame
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
  </form>

  <!-- <form action="hola.php" method="post">
    <input type="email" name="email1" value="">
    <input type="submit" value="hola">
  </form> -->
</body>
</html>