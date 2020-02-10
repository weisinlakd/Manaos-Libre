<?php 
class FotoProducto {

    private $id;
    private $id_producto;
    private $nombre;
    private $path;
    

    public function __construct (int $id_producto ,string $nombre, string $path) {
                            

        $this->id_producto = $id_producto;
        $this->nombre = $nombre;
        $this->path = $path;
        

    }

    public function crearFotoProducto (PDO $conn, $i) {

        $sql = "INSERT INTO fotos_productos 
                set id_producto = :id_producto, nombre = :nombre , path = :path";

        $query = $conn->prepare($sql);
        $query->bindValue(":id_producto",$this->id_producto, PDO::PARAM_INT);
        $query->bindValue(":nombre",$this->nombre, PDO::PARAM_STR);
        $query->bindValue(":path",$this->path, PDO::PARAM_STR);
        
        

        try {
            //code...
            $result = $query->execute();
            if ($result){
                // FALTA AGREGAR LAS FOTOS
                $foto = $this->subirFoto($i);
                var_dump($foto);
                $this->id = $conn->lastInsertId();
                if ($foto){

                    echo "foto producto creado y subida!";
                    return true;
                } else echo "foto producto creado en db, no subida";
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


    public function getFotoProductoByIdProducto (PDO $conn, $id) {

        $sql = "select * from fotos_productos where id_producto = :id limit 3";
        $query = $conn->prepare($sql);
        $query->bindValue(":id",$id, PDO::PARAM_INT);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            if ($result)
            return $result ;
            // = $this->restaurarProducto($result);
            else return false;
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            
        }

    }


    // HAY QUE ADAPTAR ESTAS FUNCIONES

    public function subirFoto ($i) {
          
        
                
        $result = move_uploaded_file($_FILES["fotos"]["tmp_name"][$i], $this->path);

        
        return $result;

    }

    public function validarExtension() {
        if (isset($_FILES["fotos"])){

            $todasValidas = true;
            $todasExt = [];
            for ($i =0; $i <= 2; $i++) {
                
                $ext = pathinfo($_FILES["fotos"]["name"][$i], PATHINFO_EXTENSION);
                if($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
                    $todasValidas = false;
                } else $todasExt[] = $ext;

            }
            if ($todasValidas) {
                return $todasExt;
            }
            else return false;

        }  else return false;
    }
}
?>