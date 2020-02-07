<?php 
    class Direccion extends Ciudad  {

        private $id;
        private $direccion;
        private $ciudad_id;
        private $isDepartamento;
        private $departamento;

        public function __construct($direccion, $ciudad_id, $isDepartamento = null, $departamento = null)   {
            
            $this->direccion = $direccion;
            $this->ciudad_id = $ciudad_id;

            if ($isDepartamento) $this->isDepartamento = $isDepartamento;
            if ($departamento) $this->departamento = $departamento;

        }

        public function crearDireccion (PDO $conn) {
            # code...
            $sql = "INSERT INTO direcciones 
                set direccion = :direccion , 
                ciudad_id = :ciudad_id , 
                departamento = :departamento";

            $query = $conn->prepare($sql);
            $query->bindValue(":direccion",$this->direccion, PDO::PARAM_STR);
            $query->bindValue(":ciudad_id",$this->ciudad_id, PDO::PARAM_INT);
            
            
    
            try {
                //code...
                $result = $query->execute();
                if ($result){
                    $this->id = $conn->lastInsertId();
                    echo "direccion creada!";
                    return true;
                }
            } catch (\Exception $e) {
                //throw $th;
                echo $e . "<br>";
                $a = $e->getCode();
                
                return false;
            }
            
        }

        public function getDireccionById (PDO $conn, $id) {

            $sql = "select * from direcciones where id = :id";
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