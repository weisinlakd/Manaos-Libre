<?php 

    require_once('registro.php');

    if (isset($usuario['repetido'])) {
     setcookie('yaExiste', true)  ?>
        
        <script>window.location.replace('register.php')</script>
    <?php } else {
        session_start();
        require_once('hayUsuario.php');
        ?>
        <script>window.location.replace('home.php')</script>
    <?php } ?>