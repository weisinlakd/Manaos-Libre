<?php 

    // var_dump($_POST);


    $usuario['email'] = $_POST['email'];
    $usuario['password'] = $_POST['password'];
    $usuario['remember-me'] = $_POST['remember-me'] || null;

    // var_dump($usuario);
    
    function guardarUsuario($arreglo) {

        
        return json_encode($arreglo);

    }

    $json = guardarUsuario($usuario);


    $usuarioLog = true;

?>