
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro | Manaos Libre</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logosolo.png" />
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">
    
    <link rel="stylesheet" href="../css/register.css">
  </head>
  <body>
    <div class="main">
      
      <section class="signup">
        <div class="container">
          <div class="signup-content">
            <div class="signup-form">
              <h2 class="form-title">Registrate!</h2>
              <form action="home.php" method="POST" class="register-form" id="register-form">
                <div class="form-group">
                  <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                  <input type="text" name="name" id="name" placeholder="Usuario" />
                </div>
                <div class="form-group">
                  <label for="email"><i class="zmdi zmdi-email"></i></label>
                  <input type="email" name="email" id="email" placeholder="Email" />
                </div>
                <div class="form-group">
                  <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                  <input type="password" name="pass" id="pass" placeholder="Contraseña" />
                </div>
                <div class="form-group">
                  <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                  <input type="password" name="re_pass" id="re_pass" placeholder="Ingresá nuevamente la contraseña" />
                </div>
                <div class="form-group">
                  <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                  <label for="agree-term" class="label-agree-term"><span><span></span></span>Acepto los <a href="#" class="term-service">Términos de servicio</a>.</label>
                </div>
                <div class="form-group form-button">
                  <input type="submit" name="signup" id="signup" class="form-submit" value="Registrarse" />
                </div>
              </form>
            </div>
            <div class="signup-image">
              <figure><a href="home.php"><img src="../img/logoml.png" alt="sing up image"></a></figure>
              <a href="sign-in.php" class="signup-image-link">Ya tengo una cuenta.</a>
            </div>
          </div>
        </div>
      </section>
      
      
    
    <script src="../js/jquery-3.3.1.min.js" type="cc855bfe3f7079dfbd7b3fea-text/javascript"></script>
    <script src="../js/register.js" type="cc855bfe3f7079dfbd7b3fea-text/javascript"></script>
    
    <script type="cc855bfe3f7079dfbd7b3fea-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-23581568-13');
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="cc855bfe3f7079dfbd7b3fea-|49" defer=""></script></body>
</html>