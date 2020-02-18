<?php 
class Categoria {

    private $id;
    private $name;
    private $descripcion;
    private $idPadre;
    private $estado = 1;

    public function __construct($name, $descripcion, $idPadre = null)   {
            
        $this->name = $name;
        $this->descripcion = $descripcion;

        if ($idPadre) $this->idPadre = $idPadre;
       

    }

    public function crearCategoria (PDO $conn) {
        # code...
        $sql = "INSERT INTO categoriaes 
            set name = :name , 
            id_padre = :idPadre , 
            descripcion = :descripcion";
        $query = $conn->prepare($sql);
        $query->bindValue(":name",$this->name, PDO::PARAM_STR);
        $query->bindValue(":idPadre",$this->idPadre, PDO::PARAM_INT);
        $query->bindValue(":descripcion",$this->descripcion, PDO::PARAM_STR);
        

        try {
            //code...
            $result = $query->execute();
            if ($result){
                $this->id = $conn->lastInsertId();
                echo "categoria creada!";
                return true;
            }
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            $a = $e->getCode();
            
            return false;
        }
        
    }

    public function getCategorias (PDO $conn) {
        
        $sql = "select * from categorias where estado = 1";
        $query = $conn->prepare($sql);
        
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            
        }
    }

    public function getCategoriaById (PDO $conn, $id) {

        $sql = "select * from categorias where id = :id and estado = 1";
        $query = $conn->prepare($sql);
        $query->bindValue(":id",$id, PDO::PARAM_INT);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            
        }

    }

}

?>