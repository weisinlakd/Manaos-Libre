<?php 

    session_start();
    //var_dump($_POST);
    
    // require_once('hayUsuario.php');
    //echo '<br>';
    //var_dump($usuario);
    require_once('login.php');

    if ($usuarioDB === false) {
        setcookie('loginMalo', true , time()+10);
        setcookie('emailIngresado', $_POST['email'], time() + 60);
        setcookie('emailCorrecto', '', -1); 
        echo "log incorrecto"?>
        <script>window.location.replace('sign-in.php')</script>
    <?php } 
        else {
            if (isset($_POST['remember-me'])){
                setcookie('remember-me', true);
                setcookie('emailCorrecto', $_POST['email']);
            }
            $_SESSION["usuario"] = serialize($usuario);
            echo "log correcto"
            ?>
            
            <script>window.location.replace('home.php')</script> 
        <?php } ?>