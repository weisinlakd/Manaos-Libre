<?php 
session_start();
require_once('classes/Usuario.php');
require_once('classes/Connection.php');
require_once('classes/Ciudad.php');
require_once('classes/Direccion.php');
$usuario = unserialize($_SESSION["usuario"]);
// var_dump($usuario);
// echo "<br>";
// echo "<br>";
var_dump($_POST);
// echo "<br>";
// echo "<br>";
// var_dump($_FILES);
// echo "<br>";
// echo "<br>";



if (isset($_FILES['avatar']) && $_FILES['avatar']['size'] != 0){
    $ext = $usuario->validarExtension();
    $usuario->setFoto($ext);
    if (!$ext) {
        setcookie('fotoIncorrecta', 'Hubo un problema al cargar la foto!', time()+10);
        setcookie('datosParaModificar', serialize($_POST), time() + 10); 
        echo "foto incorrecta"?>
        <script>window.location.replace('perfil.php')</script>
    <?php }
} 


$name = $_POST["name"] != "" ? $_POST["name"] : $usuario->name();
$usuario->setName($name);

$password = $_POST["pass"] != "" ? password_hash($_POST["pass"] , PASSWORD_DEFAULT) : $usuario->password();
$usuario->setPassword($password);

$telefono = $_POST["phone"] != "" ? $_POST["phone"] : $usuario->telefono();
$usuario->setTelefono($telefono);

// $direccionID = $_POST["location"] != "" ? $_POST["location"] : $usuario->direccionID();


$apellido = $_POST["last_name"] != "" ? $_POST["last_name"] : $usuario->apellido();
$usuario->setApellido($apellido);



// var_dump($name);
// var_dump($usuario);

$conn = new Connection();
$pdo = $conn->start();

if (isset($_POST["location"]) && $_POST["location"] != ""){
    $idCiudad = $_POST["ciudad"];
    $direccion = new Direccion($_POST["location"],$idCiudad);

    $direccion->crearDireccion($pdo);
    var_dump($direccion->id());
    $usuario->setDireccionID($direccion->id());
}

// die;
$res = $usuario->updateUsuario($pdo);
// die;
if ($res) {
    $_SESSION["usuario"] = serialize($usuario) ?>
    <script>window.location.replace('perfil.php')</script>
<?php } else setcookie("errorEnActualizacion",  'Hubo un problema al actualizar los datos!', time()+10 )?>
<script>window.location.replace('perfil.php')</script>