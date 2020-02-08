<?php 

session_start();    
require_once('classes/Usuario.php');
require_once('classes/Connection.php');
require_once('classes/Producto.php');
require_once('classes/Categoria.php');

$usuario = unserialize($_SESSION["usuario"]);

$conn = new Connection();
$pdo = $conn->start();
$producto = new Producto(2, "hola", "hola wacho", 400, 2, 405);

// var_dump($producto);



$productos = $producto->getProductos($pdo);


var_dump($productos);
echo "<br>";
echo "<br>";
echo "<br>";
// $result = [];
// foreach ($productos as $productoDB) {
//     // var_dump($producto); die;
//     $productoActual = $producto->restaurarProducto($productoDB);
//     // var_dump($productoActual); die;
//     // $productoActual->cantidad = $producto->getTotalProductos($pdo);
//     // var_dump($producto); die;
//     array_push($result, $productoActual);
//     echo $productoActual->id();
    
// }

// var_dump($result);
?>