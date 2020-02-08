<?php 
// session_start();
require_once('classes/Usuario.php');
require_once('classes/Connection.php');
require_once('classes/Producto.php');
require_once('classes/Categoria.php');

$usuario = unserialize($_SESSION["usuario"]);

$conn = new Connection();
$pdo = $conn->start();
$producto = new Producto(2, "hola", "hola wacho", 400, 2, 405);

// var_dump($producto);

// echo "<br>";
// echo "<br>";
// echo "<br>";
$offset = isset($_GET["offset"]) ? $_GET["offset"] : null;
$productos = $producto->getProductos($pdo, $offset);


// foreach ($productos as $productoActual) {

//     // var_dump(($productoActual)); die;

//     $productoActual = $producto->restaurarProducto($productoActual);
//     var_dump($productoActual);
//     echo "<br>";
//     echo "<br>";
//     echo "<br>";
// }

//  var_dump($productos);
?>