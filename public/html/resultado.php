<?php 

    // require_once('registro.php');
    require_once('crearUsuario.php');

    if (!$noCrear){
        
        $usuario->crearUsuario($pdo);
        
    }
    

    // echo 'USUARIO ==> ';
    // var_dump($usuario);
    // echo '<br>';
    $usuarioLog = true;

    var_dump($usuario);
    
    
    // if (isset($usuario['avatar'])=='error') {
        // setcookie('fotoIncorrecta', 'Hubo un problema al cargar la foto!', time()+10); ?>
        <!-- <script>window.location.replace('register.php')</script>  -->
   <?php //}
    
    
    
    
    
    
    
    //sacar comentarios a todo al terminar foto

    if ($usuario->yaExiste()) {
     setcookie('yaExiste', true, time()+10);
     setcookie('datosIngresados', serialize($_POST), time()+10);
     setcookie('mailFoto', $_POST['email'], time()+10);  
     echo "volver al registro"
     ?>
        
        <!-- <script>window.location.replace('register.php')</script> -->
     <?php } else {
        session_start();
        $_SESSION["usuario"] = serialize($usuario);
        require_once('hayUsuario.php');
        if (isset($_POST['remember-me'])){
            setcookie('remember-me', true);
            setcookie('emailCorrecto', $_POST['email']);
        } echo "sesion iniciada"
        ?>
        <!-- <script>window.location.replace('home.php')</script> -->
     <?php  } ?>