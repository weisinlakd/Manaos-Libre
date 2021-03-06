<?php 
   //var_dump($_COOKIE['yaExiste']);
   //var_dump($_COOKIE['datosIngresados']);
   //var_dump($mailFoto);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro | Manaos Libre</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logosolo.png" />
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="../css/signin.css">
    
    
  </head>
  <body class="text-center color-4">

    <div class="container">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-3 col-md-12">
          <div class="signup-image">
            <br>
            <br>
            <br>
            <figure><a href="/home"><img src="../img/logoml.png" alt="Ir al home"></a></figure>
            <a href="sign-in.php" class="signup-image-link">Ya tengo una cuenta.</a>
          </div>
        </div>
        <div class="col-lg-7 col-md-12">
          
          <form action="{{ route('register') }}" method="POST" class="form-signin" id="register-form" enctype="multipart/form-data"
          oninput='password_confirmation.setCustomValidity(password_confirmation.value != password.value ? "Las contraseñas no coinciden." : "")'>
          
          @csrf
            
              <h2 class="h3 mb-3">Creá tu Cuenta!</h2>
            
            <br>
            <div class="form-group row">
              <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
              <input type="text" name="name" id="name" placeholder="Usuario" class="form-control @error('name') is-invalid @enderror" required autofocus value="{{ old('name') }}"/>
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group row">
              <!-- <label for="email"><i class="zmdi zmdi-email"></i></label> -->
              <input type="email" name="email" id="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" required  value="{{ old('email') }}"/>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group row">
              <label for="avatar" > <i class="zmdi zmdi-camera"></i> Ingresá tu foto (Opcional)!</label>
              <input name="avatar" type="file" class="form-control-file @error('avatar') is-invalid @enderror" id="avatar" >
              @error('avatar')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group row">
              <!-- <label for="pass"><i class="zmdi zmdi-lock"></i></label> -->
              <input type="password" name="password" id="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" required />
              <input type="checkbox" onclick="myFunction()">Ver contraseña
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group row">
              <!-- <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> -->
              <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ingresá nuevamente la contraseña" class="form-control" required />
            </div>
            <div class="checkbox mb-3">
              <label>
                <input name="remember-me" type="checkbox" value="remember-me"> Recuérdame
              </label>
            </div>
            <!-- <div class="checkbox mb-3">
              <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
              <label for="agree-term" class="label-agree-term"><span><span></span></span>Acepto los <a href="#" class="term-service">Términos de servicio</a>.</label>
            </div> -->
            <div class="form-group form-button">
              <input type="submit" id="signup" class="form-submit" value="Registrarse"  />
            </div>
          </form>
        </div>
      </div>
    </div>

    
    
    
    <script src="../js/jquery-3.3.1.min.js" type="cc855bfe3f7079dfbd7b3fea-text/javascript"></script>
    <script src="../js/register.js" type="cc855bfe3f7079dfbd7b3fea-text/javascript"></script>
    
    <script type="cc855bfe3f7079dfbd7b3fea-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-23581568-13');
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="cc855bfe3f7079dfbd7b3fea-|49" defer=""></script>
    <script>
      function togglePass() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }

    </script>
  
  </body>
</html>