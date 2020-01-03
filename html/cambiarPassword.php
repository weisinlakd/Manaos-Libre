<?php 


//var_dump($_POST);

$usuarios= file_get_contents("../db/usuarios.json");
$usuariosArray= json_decode($usuarios, true);

$email = $_POST["email"];
$busqueda= array_column($usuariosArray, "email");
$index = array_search($email, $busqueda);

// echo '<br>';echo '<br>';echo '<br>';
// echo $index;
// echo '<br>';echo '<br>';echo '<br>';


if ($index == false) {
    // echo 'entro por aca, no existe la cuenta';
    setcookie('noExiste' , 'No existe cuenta con ese email.', time()+10, '/');
    // var_dump($_COOKIE['noExiste']);
    header("Location: sign-in.php");
}

if ($_POST['pass'] == $_POST['re_pass']){
    $usuariosArray[$index]['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
}


//var_dump($usuariosArray[$index]);

$usuariosFinal = json_encode($usuariosArray);
        
file_put_contents("../db/usuarios.json", $usuariosFinal);

setcookie('passCambiada', true, time()+20);
setcookie('loginMalo', null, -1);
setcookie('noExiste', null, -1);
header("Location: sign-in.php"); // CAMBIAR LOS SCRIPTS A HEADER!!!!!
?>
    <!-- <script>window.location.replace('sign-in.php')</script> -->