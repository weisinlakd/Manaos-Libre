<?php 

function getAll(PDO $db, $tabla, $estado) {
    if ($estado){

        $sql = "select * from $tabla where estado = 1 ";
    } else {
        $sql = "select * from $tabla";
    }

    $query = $db->prepare($sql);
    $query->execute();
    
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
    return $result;
}
?>