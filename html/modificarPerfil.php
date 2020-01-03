<?php

// var_dump($_POST);
 session_start();
// echo '<br>';
// var_dump($_SESSION);
// echo '<br>';
//var_dump($_FILES);
//echo '<br>';

function validarExtension() {
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    if($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
    return false;
    } else return $ext;
}

function subirAvatar($num) {
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
      
    move_uploaded_file($_FILES["avatar"]["tmp_name"], '../db/img/avatar-'.$num.".".$ext);

    return $num;
}

$usuarios= file_get_contents("../db/usuarios.json");
$usuariosArray= json_decode($usuarios, true);

// falta validar si ya existe el usuario
$email = $_SESSION['usuario']["email"];
$busqueda= array_column($usuariosArray, "email");
$index = array_search($email, $busqueda);

// echo '<br>';echo '<br>';echo '<br>';
// echo $index;
// echo '<br>';

$array = $_POST;

    foreach ($array as $key => $value) {
        # code...

        //echo $value;
    if ($value) {
        if ($key == 'pass'){
            $value = password_hash($value, PASSWORD_DEFAULT);
        }
        if ($key == 're_pass') continue;
        // echo $key." =>   ".$value.'<br>';
        $usuariosArray[$index][$key] = $value;
    }

    }

    // var_dump($usuariosArray[$index]);

    $ext = validarExtension();

    // echo $ext;

    if ($ext) {
       $num = subirAvatar(rand(1,300));
    //    echo $num;
       $usuariosArray[$index]['avatar'] = "../db/img/avatar-$num.$ext";
       setcookie('datosParaModificar', null, -1);
    } else $usuariosArray[$index]['avatar'] = 'error';

    if ($usuariosArray[$index]['avatar'] == 'error') {
        setcookie('datosParaModificar', serialize($_POST), time() + 10);?> <!---->
        <script>window.location.replace('perfil.php')</script>
    <?php }
    
    //falta manejar el caso del error 

    //GRABA CAMBIOS
    $_SESSION['usuario'] = $usuariosArray[$index];
    
    $usuariosFinal =json_encode($usuariosArray);
        
    file_put_contents("../db/usuarios.json", $usuariosFinal);

?>
    <script>window.location.replace('perfil.php')</script>