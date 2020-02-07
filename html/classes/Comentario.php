<?php 
    class Comentario {

        private $id;
        private $idUsuario;
        private $idProducto;
        private $comentario;
        private $estado = 1;

        public function __construct(int $idUsuario, int $idProducto, string $comentario) {
            
            $this->idUsuario = $idUsuario;
            $this->idProducto = $idProducto;
            $this->comentario = $comentario;

        }

        public function crearComentario (PDO $conn) {
            # code...
            $sql = "INSERT INTO comentarios 
                set id_usuario = :idUsuario , 
                id_producto = :idProducto , 
                comentario = :comentario";

            $query = $conn->prepare($sql);
            $query->bindValue(":idUsuario",$this->idUsuario, PDO::PARAM_INT);
            $query->bindValue(":idProducto",$this->idProducto, PDO::PARAM_INT);
            $query->bindValue(":comentario",$this->comentario, PDO::PARAM_STR);
            
    
            try {
                //code...
                $result = $query->execute();
                if ($result){
                    $this->id = $conn->lastInsertId();
                    echo "comentario creado!";
                    return true;
                }
            } catch (\Exception $e) {
                //throw $th;
                echo $e . "<br>";
                $a = $e->getCode();
                
                return false;
            }
            
        }

        public function getComentariosByProductoId (PDO $conn, $idProducto) {
        
            $sql = "select * from comentarios join productos on productos.id = comentarios.id_producto
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

        public function getComentariosByUsuarioId (PDO $conn, $idUsuario) {
        
            $sql = "select * from comentarios join usuarios on usuarios.id = comentarios.id_usuario
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