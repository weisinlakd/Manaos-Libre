<?php 

session_start();    
require_once('classes/Usuario.php');
require_once('classes/Connection.php');
require_once('classes/Producto.php');
require_once('classes/Categoria.php');
require_once('classes/FotoProducto.php');
require_once('classes/Ciudad.php');


$usuario = unserialize($_SESSION["usuario"]);

$conn = new Connection();
$pdo = $conn->start();
$producto = new Producto(2, "hola", "hola wacho", 400, 2, 405);
$ciudad = new Ciudad("","");
$ciudades = $ciudad->getCiudades($pdo);
$categoria = new Categoria("","");
$categorias = $categoria->getCategorias($pdo);


// var_dump($producto);

// $id = 3;
// $productoID = $producto->getProductoById($pdo, $id);
// $name = $producto->id_usuario()."-".$productoID->name()."-$id";
// // $productos = $producto->getProductos($pdo);
// $foto = new FotoProducto($id, $name, "../db/img/productos/$name");

// // $foto->crearFotoProducto($pdo);

// $fotos = $foto->getFotoProductoByIdProducto($pdo, $id);


// var_dump($ciudades);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($_POST);
echo "<br>";
echo "<br>";
echo "<br>";
// var_dump($categorias);
// var_dump($result);
require('head.php');
?>

<form action="test.php" method="post">

    
    
    <select name="ciudad" id="ciudad"  class="js-example-basic-single" placeholder="buscá tu ciudad">
        <?php foreach ($ciudades as $ciudad) : ?>
        <option value="<?=$ciudad->id?>" name="ciudad_id" > <?=$ciudad->nombre?> </option> 
        <?php endforeach ?>
    </select>

    <select name="categoria" id="categoria"  class="js-example-basic-single" placeholder="buscá tu categoría" >
        <?php foreach ($categorias as $categoria) : ?>
        <option value="<?=$categoria->id?>" name="categoria" > <?=$categoria->name?> </option> 
        <?php endforeach ?>
        <!-- <option value="new" name="new" id="cat" onclick="myFunction()"> <bold> No encuentro una categoría acorde </bold></option> -->
    </select>
    <input type="text" id="hola" disabled>
    <input type="text" id="wacho" disabled>
    <input type="submit" value="submit">

    
</form>

<script>
// $(document).ready(function() {
//     $('.js-example-basic-single').select2();
// });

$(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });

</script>