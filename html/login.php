<?php 

    require_once('classes/Connection.php');
    require_once('classes/Usuario.php');

    // var_dump($_POST);
    // echo "<br>";

    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = new Connection();
    $pdo = $conn->start();

    $usuarioTemp = new Usuario(null, $email, $password);

    $usuarioDB = $usuarioTemp->iniciarSesion($pdo, $email, $password);

    if ($usuarioDB) {

        
        $usuario = $usuarioTemp->restaurarUsuario($usuarioDB);
        
        // var_dump($usuario);
        
    }
    // $usuario2 = new Usuario($usuarioDB->name,$usuarioDB->email,$usuarioDB->password,$usuarioDB->foto,$usuarioDB->rememberMe);
    // var_dump($usuarioDB);
    // echo "<br><br>";
    // var_dump($usuario2);
    // echo "<br><br>";
?>