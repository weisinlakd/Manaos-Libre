<?php
function borrarUser ($usuario) {

    $usuarios= file_get_contents("../db/usuarios.json");
    $usuariosArray= json_decode($usuarios, true);

    // falta validar si ya existe el usuario
    $email = $usuario["email"];
    $busqueda= array_column($usuariosArray, "email");
    $index = array_search($email, $busqueda);

    if ($index !== false){
        unset($usuariosArray[$index]);
    }
    if ($index == false) return false;

    $usuariosFinal =json_encode($usuariosArray);
    
    file_put_contents("../db/usuarios.json", $usuariosFinal);
}


?>