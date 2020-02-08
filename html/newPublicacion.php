<?php 

session_start();
require_once('classes/Usuario.php');
require_once('classes/Connection.php');
require_once('classes/Producto.php');
require_once('classes/Categoria.php');

$usuario = unserialize($_SESSION["usuario"]);
echo "Creando Publicación"; 
var_dump($_POST);
var_dump($_FILES);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($usuario);
echo "<br>";
echo "<br>";
echo "<br>";


$name = $_POST["name"];
$descripcion = $_POST["descripcion"];
$categoria_id = $_POST["categoria"];
$meses_uso = $_POST["meses_uso"];
$estado_uso = $_POST["estado_uso"];
$precio = $_POST["precio"];
$ciudad_id = $_POST["ciudad_id"];
$usuario_id = $usuario->id();

$producto = new Producto($usuario_id, $name, $descripcion, $precio, $ciudad_id, $categoria_id);


var_dump($producto);
echo "<br>";
echo "<br>";
echo "<br>";


$conn = new Connection();
$pdo = $conn->start();

$result= $producto->crearProducto($pdo);

var_dump($result);


    
?>