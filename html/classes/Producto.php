<?php 
class Producto {

    private $id;
    private $id_usuario;
    private $name;
    private $descripcion;
    private $precio;
    private $ciudad_id;
    private $fechaCreacion; 
    private $categoria_id;
    private $valoracion = 0;
    private $is_usado = 0;
    private $meses_uso;
    private $estado = 1;

    public function __construct (int $id_usuario ,string $name, string $descripcion, 
                                float $precio, int $ciudad_id, int $categoria_id,
                                 int $is_usado = 0, int $meses_uso = null) {
                            

        $this->id_usuario = $id_usuario;
        $this->name = $name;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->ciudad_id = $ciudad_id;
        $this->categoria_id = $categoria_id;
        

        if ($is_usado) $this->is_usado = $is_usado;
        if ($meses_uso) $this->meses_uso = $meses_uso;

    }

    public function crearProducto (PDO $conn) {

        $sql = "INSERT INTO productos 
                set id_usuario = :id_usuario, name = :name , descripcion = :descripcion, precio = :precio, 
                ciudad_id = :ciudad_id, categoria_id = :categoria_id, valoracion = :valoracion, 
                is_usado = :is_usado, meses_uso = :meses_uso";

        $query = $conn->prepare($sql);
        $query->bindValue(":id_usuario",$this->id_usuario, PDO::PARAM_INT);
        $query->bindValue(":name",$this->name, PDO::PARAM_STR);
        $query->bindValue(":descripcion",$this->descripcion, PDO::PARAM_STR);
        $query->bindValue(":precio",$this->precio, PDO::PARAM_INT);
        $query->bindValue(":ciudad_id",$this->ciudad_id, PDO::PARAM_INT);
        $query->bindValue(":categoria_id",$this->categoria_id, PDO::PARAM_INT);
        $query->bindValue(":valoracion",$this->valoracion, PDO::PARAM_INT);
        $query->bindValue(":is_usado",$this->is_usado, PDO::PARAM_INT);
        $query->bindValue(":meses_uso",$this->meses_uso, PDO::PARAM_INT);
        

        try {
            //code...
            $result = $query->execute();
            if ($result){
                
            $this->id = $conn->lastInsertId(); 
                echo "producto creado!";
                return true;
            }
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            $a = $e->getCode();
            
            if( $a === '23000') {
                echo "ya existe";
                $this->yaExiste = true;
                return false;
            }
        }
    }

}

?>