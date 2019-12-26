<?php 

    require_once('registro.php');

    if (isset($usuario['repetido'])) {
     setcookie('yaExiste', true)  ?>
        
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
    <?php } ?>