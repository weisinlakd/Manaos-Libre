<?php 

    // var_dump($_POST);


    $usuario['email'] = $_POST['email'];
    $usuario['password'] = $usuario['password'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $usuario['remember-me'] = $_POST['remember-me'] || null;

    // var_dump($usuario);
    
    function guardarUsuario($arreglo) {

        
        return json_encode($arreglo);

    }

    $json = guardarUsuario($usuario);


    $usuarioLog = true;

?>