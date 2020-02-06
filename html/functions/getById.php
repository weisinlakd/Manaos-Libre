<?php 

function getById(PDO $db, $tabla, $id) {
        
        $sql = "select * from $tabla where id =:id";
        $query = $db->prepare($sql);
        $query->bindValue(":id",$id, PDO::PARAM_INT);
        $query->execute();
    
        $result = $query->fetch(PDO::FETCH_ASSOC);
    
        return $result;
}
?>