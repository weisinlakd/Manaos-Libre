<?php 

// echo 'votando';

// $id = 91;

if (isset($_POST["rating-$id"])){

    // var_dump($_POST);
    require_once('classes/Valoracion.php');

    $val = new Valoracion($usuario->id(),$id,$_POST["rating-$id"]*2);
    // echo '<br><br><br>';
    // var_dump($val);

    $res = $val->yaVotaste($pdo);
    if ($res){
        $disabled = true;
        return;
    }

    $val->crearValoracion($pdo);

    $disabled = true;
    
}

?>