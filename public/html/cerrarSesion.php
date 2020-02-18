<?php 



    function cerrarSesion () {
        session_start();
        session_destroy();
    }

    cerrarSesion();

?>

<script>window.location.replace('home.php')</script>