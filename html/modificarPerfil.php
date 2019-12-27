<?php

var_dump($_POST);
session_start();
echo '<br>';
var_dump($_SESSION);
echo '<br>';
var_dump($_FILES);
echo '<br>';

$usuarios= file_get_contents("../db/usuarios.json");
$usuariosArray= json_decode($usuarios, true);

// falta validar si ya existe el usuario
$email = $_SESSION['usuario']["email"];
$busqueda= array_column($usuariosArray, "email");
$index = array_search($email, $busqueda);

echo '<br>';echo '<br>';echo '<br>';
echo $index;
echo '<br>';

$array = $_POST;

    foreach ($array as $key => $value) {
        # code...

        //echo $value;
    if ($value) {
        if ($key == 'pass'){
            $value = password_hash($value, PASSWORD_DEFAULT);
        }
        if ($key == 're_pass') continue;
        echo $key." =>   ".$value.'<br>';
        $usuariosArray[$index][$key] = $value;
    }

    }

    var_dump($usuariosArray[$index]);

    //GRABA CAMBIOS
    $_SESSION['usuario'] = $usuariosArray[$index];
    
    $usuariosFinal =json_encode($usuariosArray);
        
    file_put_contents("../db/usuarios.json", $usuariosFinal);

?>
    <script>window.location.replace('perfil.php')</script>