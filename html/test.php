<?php 

session_start();    
require_once('classes/Usuario.php');
require_once('classes/Connection.php');
require_once('classes/Producto.php');
require_once('classes/Categoria.php');
require_once('classes/FotoProducto.php');

$usuario = unserialize($_SESSION["usuario"]);

$conn = new Connection();
$pdo = $conn->start();
$producto = new Producto(2, "hola", "hola wacho", 400, 2, 405);


// var_dump($producto);

$id = 3;
$productoID = $producto->getProductoById($pdo, $id);
$name = $producto->id_usuario()."-".$productoID->name()."-$id";
// $productos = $producto->getProductos($pdo);
$foto = new FotoProducto($id, $name, "../db/img/productos/$name");

// $foto->crearFotoProducto($pdo);

$fotos = $foto->getFotoProductoByIdProducto($pdo, $id);


var_dump($productoID);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($foto);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($fotos);
// var_dump($result);
?>