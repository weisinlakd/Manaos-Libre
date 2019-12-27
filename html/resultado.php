<?php 

    require_once('registro.php');

    
    
    // if (isset($usuario['avatar'])=='error') {
        // setcookie('fotoIncorrecta', 'Hubo un problema al cargar la foto!', time()+10); ?>
        <!-- <script>window.location.replace('register.php')</script>  -->
   <?php //}
    
    
    
    
    
    
    
    //sacar comentarios a todo al terminar foto

    if (isset($usuario['repetido'])) {
     setcookie('yaExiste', true, time()+5);
     setcookie('datosIngresados', serialize($_POST), time()+5);  ?>
        
        <script>window.location.replace('register.php')</script>
     <?php } else {
        session_start();
        require_once('hayUsuario.php');
        if (isset($_POST['remember-me'])){
            setcookie('remember-me', true);
            setcookie('emailCorrecto', $_POST['email']);
        }
        ?>
        <script>window.location.replace('home.php')</script>
     <?php  } ?>