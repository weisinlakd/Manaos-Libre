<?php 

session_start();
require_once('classes/Usuario.php');
require_once('classes/Connection.php');
require_once('classes/Producto.php');
require_once('classes/Categoria.php');
require_once('classes/FotoProducto.php');

$usuario = unserialize($_SESSION["usuario"]);
echo "Creando Publicación"; 
var_dump($_POST);

echo "<br>";
echo "<br>";
echo "<br>";
var_dump($usuario);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($_FILES['fotos']);
echo "<br>";
echo "<br>";
echo "<br>";

$name = $_POST["name"];
$descripcion = $_POST["descripcion"];
$categoria_id = $_POST["categoria"];
$meses_uso = isset($_POST["meses_uso"]) ? $_POST["meses_uso"] : null;
$estado_uso = isset($_POST["estado_uso"]) ? $_POST["estado_uso"] : null;
$precio = $_POST["precio"];
$ciudad_id = $_POST["ciudad"];
$usuario_id = $usuario->id();

if (isset($_POST["meses_uso"])){
    $producto = new Producto($usuario_id, $name, $descripcion, $precio, $ciudad_id, $categoria_id, 1, $meses_uso, $estado_uso);
} else {

    $producto = new Producto($usuario_id, $name, $descripcion, $precio, $ciudad_id, $categoria_id);
}

$foto = new FotoProducto(1, "asd", "asd");

$array = $foto->validarExtension();


if (!$array){

    setcookie('fotoIncorrecta', 'Hubo un problema al cargar las fotos!', time()+10);
    setcookie('datosIngresados', serialize($_POST), time() +10); 
    ?>
    <script>window.location.replace('crearPublicacion.php')</script>
<?php }

var_dump($array); 
// die;




var_dump($producto);
echo "<br>";
echo "<br>";
echo "<br>";


$conn = new Connection();
$pdo = $conn->start();

$result = $producto->crearProducto($pdo);

var_dump($result);
echo "<br>";
echo "<br>";
echo "<br>";
if ($result) {
    $id = $result->id();
    echo 'holaaaaaaaaaaaaaaaaa';
    $name = $producto->name();
    $name = preg_replace('/\s+/', '', $name);
    $name = $producto->id_usuario()."-".$name."-$id-";
    $foto = new FotoProducto($id, "$name", "../db/img/productos/$name");

    $resp = $foto->validarExtension();
    var_dump($resp);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // die;

    for ($i = 0; $i < count($resp); $i++) {
        $foto = new FotoProducto($id, "$name".$i.".".$resp[$i], "../db/img/productos/$name".$i.".".$resp[$i]);
        $foto->crearFotoProducto($pdo, $i);
    }
}


    
?>