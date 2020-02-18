<?php 

function checkEmail(PDO $db, $usuario) {

    $sql = "select * from usuarios where email = :buscador ";
    $query = $db->prepare($sql);
    $query->bindValue(":buscador",$usuario["email"], PDO::PARAM_STR);
    $query->execute();
  
    $result = $query->fetch(PDO::FETCH_ASSOC);
  
    return $result;

}
?>