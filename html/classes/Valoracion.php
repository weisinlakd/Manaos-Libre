<?php 
    class Valoracion {

        private $id;
        private $idUsuario;
        private $idProducto;
        private $valoracion;
        private $estado = 1;

        public function __construct(int $idUsuario, int $idProducto, string $valoracion) {
            
            $this->idUsuario = $idUsuario;
            $this->idProducto = $idProducto;
            $this->valoracion = $valoracion;

        }

        public function crearValoracion (PDO $conn) {
            # code...
            $sql = "INSERT INTO valoraciones 
                set id_usuario = :idUsuario , 
                id_producto = :idProducto , 
                valoracion = :valoracion";

            $query = $conn->prepare($sql);
            $query->bindValue(":idUsuario",$this->idUsuario, PDO::PARAM_INT);
            $query->bindValue(":idProducto",$this->idProducto, PDO::PARAM_INT);
            $query->bindValue(":valoracion",$this->valoracion, PDO::PARAM_STR);
            
    
            try {
                //code...
                $result = $query->execute();
                if ($result){
                    $this->id = $conn->lastInsertId();
                    echo "valoracion creada!";
                    return true;
                }
            } catch (\Exception $e) {
                //throw $th;
                echo $e . "<br>";
                $a = $e->getCode();
                
                return false;
            }
            
        }

        public function getvaloracionsByProductoId (PDO $conn, $idProducto) {
        
            $sql = "select * from valoraciones join productos on productos.id = valoraciones.id_producto
             where estado = 1 and productos.id = $idProducto";

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

        public function getvaloracionsByUsuarioId (PDO $conn, $idUsuario) {
        
            $sql = "select * from valoraciones join usuarios on usuarios.id = valoraciones.id_usuario
             where estado = 1 and usuarios.id = $idUsuario";
             
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
        
    }
?>