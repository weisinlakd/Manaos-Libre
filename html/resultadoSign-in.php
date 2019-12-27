<?php 

    session_start();
    //var_dump($_POST);
    
    require_once('hayUsuario.php');
    //echo '<br>';
    //var_dump($usuario);

    if ($usuario == false) {
        setcookie('loginMalo', true , time()+10);
        setcookie('emailIngresado', $_POST['email'], time() + 20);
        setcookie('emailCorrecto', '', -1); ?>
        <script>window.location.replace('sign-in.php')</script>
    <?php } 
        else {
            if (isset($_POST['remember-me'])){
                setcookie('remember-me', true);
                setcookie('emailCorrecto', $_POST['email']);
            }
            ?>
            
            <script>window.location.replace('home.php')</script> 
        <?php } ?>