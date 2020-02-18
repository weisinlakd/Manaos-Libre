<?php class Ciudad {
    
    private $id;
    private $ciudad;
    private $provincia;

    public function __construct(string $ciudad, string $provincia) {

        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
        
    }

    public function crearCiudad (PDO $conn) {
        # code...
        $sql = "INSERT INTO ciudades 
            set nombre = :nombre , provincia = :provincia";
        $query = $conn->prepare($sql);
        $query->bindValue(":nombre",$this->ciudad, PDO::PARAM_STR);
        $query->bindValue(":provincia",$this->provincia, PDO::PARAM_STR);
        

        try {
            //code...
            $result = $query->execute();
            if ($result){
                $this->id = $conn->lastInsertId();
                echo "ciudad creada!";
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

    public function getCiudades (PDO $conn) {
        
        $sql = "select * from ciudades order by nombre";
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

    public function getCiudadById (PDO $conn, $id) {

        $sql = "select * from ciudades where id = :id";
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
