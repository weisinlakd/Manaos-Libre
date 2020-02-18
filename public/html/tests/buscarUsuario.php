<?php 
    session_start();
    $email = $_GET["buscar"];
    require_once('../classes/Usuario.php');
    require_once('../classes/Connection.php');

    $conn = new Connection();
    $pdo = $conn->start();

    $usuario = unserialize($_SESSION["usuario"]);

    $result = $usuario->getByEmail($pdo,$email);

    var_dump($result);
?>