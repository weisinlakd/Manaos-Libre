<?php 
class Producto {

    private $id;
    private $id_usuario;
    private $name;
    private $descripcion;
    private $precio;
    private $ciudad_id;
    private $fecha; 
    private $categoria_id;
    private $valoracion = 0;
    private $is_usado = 0;
    private $meses_uso;
    private $estado = 1;
    private $estado_uso;
    private $cantidad;

    public function __construct (int $id_usuario ,string $name, string $descripcion, 
                                float $precio, int $ciudad_id, int $categoria_id,
                                 int $is_usado = 0, int $meses_uso = null, int $estado_uso = null) {
                            

        $this->id_usuario = $id_usuario;
        $this->name = $name;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->ciudad_id = $ciudad_id;
        $this->categoria_id = $categoria_id;
        

        if ($is_usado) $this->is_usado = $is_usado;
        if ($meses_uso) $this->meses_uso = $meses_uso;
        if ($estado_uso) $this->estado_uso = $estado_uso;

    }

    public function crearProducto (PDO $conn) {

        $sql = "INSERT INTO productos 
                set id_usuario = :id_usuario, name = :name , descripcion = :descripcion, precio = :precio, 
                ciudad_id = :ciudad_id, categoria_id = :categoria_id, valoracion = :valoracion, 
                is_usado = :is_usado, meses_uso = :meses_uso, estado_uso = :estado_uso";

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
        $query->bindValue(":estado_uso",$this->estado_uso, PDO::PARAM_INT);
        

        try {
            //code...
            $result = $query->execute();
            if ($result){
                
            $this->id = $conn->lastInsertId(); 
                echo "producto creado!";
                return $this;
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

    public function id () {
        return $this->id;
    }

    public function ciudad_id () {
        return $this->ciudad_id;
    }


    public function fecha () {
        return $this->fecha;
    }

    public function id_usuario () {
        return $this->id_usuario;
    }

    public function name () {
        return $this->name;
    }

    public function precio () {
        return $this->precio;
    }

    public function descripcion () {
        return $this->descripcion;
    }
    public function cantidad () {
        return $this->cantidad;
    }

    public function categoria_id () {
        return $this->categoria_id;
    }

    public function valoracion () {
        return $this->valoracion;
    }

    public function ciudad (PDO $conn) {

        $sql = "select nombre from ciudades where id = :id";
        $query = $conn->prepare($sql);
        $query->bindValue(":id",$this->ciudad_id, PDO::PARAM_INT);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
            return $result->nombre;
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            return $e;
        }
        
    }

    public function getProductos (PDO $conn, $offset = null) {
        
        $sql = "select * from productos where estado = 1 limit 8 ";
        if ($offset) $sql = $sql. " offset ". 8*$offset;
        $query = $conn->prepare($sql);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            $productos = array();
            foreach ($result as $producto) {
                // var_dump($producto); die;
                // $productoActual+= 1; 
                $productoActual = new Producto(1,"2","3",3,4,5); //PREGUNTAR QUE PASA ACÁ
                $productoActual = $productoActual->restaurarProducto($producto);
                
                // var_dump($productoActual); die;
                $productoActual->cantidad = $productoActual->getTotalProductos($conn);
                // var_dump($producto); die;
                $productos[] = $productoActual;
                // $productoActual = null;
                // var_dump($productos); echo "<br><br><br>";
                // echo $productoActual->id();
                
                
            }
            
            return $productos;

        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            return $e;
        }
    }

    public function getTotalProductos (PDO $conn, $isBusqueda = false ) {
        
        $sql = "select count(*) as total from productos where estado = 1";
        if ($isBusqueda) {
            $sql = "select count(*) as total from productos where estado = 1 and name like '%$isBusqueda%' ";
        }
        $query = $conn->prepare($sql);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
            $this->cantidad = $result->total;
            return $result->total;

        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            return $e;
        }
    }

    public function getProductoById (PDO $conn, $id) {

        $sql = "select * from productos where id = :id and estado = 1";
        $query = $conn->prepare($sql);
        $query->bindValue(":id",$id, PDO::PARAM_INT);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
            if ($result)
            return $result = $this->restaurarProducto($result);
            else return false;
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            
        }

    }

    public function getProductoByName (PDO $conn, $name , $offset = null) {

        $sql = "select * from productos where name like :name and estado = 1 limit 8 ";
        if ($offset) $sql = $sql. " offset ". 8*$offset;
        $query = $conn->prepare($sql);
        $query->bindValue(":name","%$name%", PDO::PARAM_STR);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            if ($result) {

                $productos = array();
                foreach ($result as $producto) {
                    // var_dump($producto); die;
                    // $productoActual+= 1; 
                    $productoActual = new Producto(1,"2","3",3,4,5); //PREGUNTAR QUE PASA ACÁ
                    $productoActual = $productoActual->restaurarProducto($producto);
                    
                    // var_dump($productoActual); die;
                    $productoActual->cantidad = $productoActual->getTotalProductos($conn,$name);
                    // var_dump($producto); die;
                    $productoActual->setValoracion($conn);//borrar si rompi algo
                    $productos[] = $productoActual;
                    // $productoActual = null;
                    // var_dump($productos); echo "<br><br><br>";
                    // echo $productoActual->id();
                }
                    
                return $productos;
                
            } else return false;
            
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            
        }

    }

    public function restaurarProducto (object $productoDB) {

        $this->id = $productoDB->id;
        $this->id_usuario = $productoDB->id_usuario;        
        $this->name = $productoDB->name;    
        $this->descripcion = $productoDB->descripcion;   
        $this->precio = $productoDB->precio;
        $this->ciudad_id = $productoDB->ciudad_id;  
        $this->fecha = $productoDB->fecha;    
        $this->categoria_id = $productoDB->categoria_id;
        $this->valoracion = $productoDB->valoracion;    
        $this->is_usado = $productoDB->is_usado;
        $this->meses_uso = $productoDB->meses_uso;
        $this->estado_uso = $productoDB->estado_uso;
        $this->estado = $productoDB->estado;
        $this->cantidad;

        return $this;
        
    }

    public function getVendedor (PDO $conn) {
        

        $id = $this->id_usuario;   
        $sql = "select * from usuarios where id = :buscador and estado = 1";
        $query = $conn->prepare($sql);
        $query->bindValue(":buscador",$id, PDO::PARAM_STR);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
            // var_dump($result);
            return $result->name;
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            
        }


    }

    public function setValoracion (PDO $conn) {

        $id = $this->id;

        $sql = 'select avg(valoracion) as promedio from valoraciones where id_producto = :id';
        $query = $conn->prepare($sql);
        $query->bindValue(":id",$id, PDO::PARAM_INT);

        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
            if ($result){
                
                $this->valoracion = $result->promedio;
                return $result->promedio;
            }
            // return $result->name;
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            
        }

    }



    public function getMasVotados (PDO $conn) {
        
        $sql = "select avg(valoracion) as promedio, id_producto from valoraciones 
            group by id_producto order by promedio desc limit 12";

        $query = $conn->prepare($sql);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            // var_dump($result); 
            // die;
            $productos = array();
            foreach ($result as $producto) {
                // var_dump($producto); die;
                // $productoActual+= 1;
                $id = $producto->id_producto;
                // var_dump($id); die; 
                $productoActual = new Producto(1,"2","3",3,4,5); //PREGUNTAR QUE PASA ACÁ
                
                $productoActual = $productoActual->getProductoById($conn,$id);
                
                // var_dump($productoActual); die;
                $productoActual->cantidad = $productoActual->getTotalProductos($conn);
                // var_dump($producto); die;
                $productoActual->setValoracion($conn);
                $productos[] = $productoActual;
                // $productoActual = null;
                // var_dump($productos); echo "<br><br><br>";
                // echo $productoActual->id();
                
                
            }
            
            return $productos;

        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            return $e;
        }
    }
    

    public function getMasBaratos (PDO $conn) {
        
        $sql = "select * from productos order by precio asc limit 12";

        $query = $conn->prepare($sql);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            // var_dump($result); 
            // die;
            $productos = array();
            foreach ($result as $producto) {
                // var_dump($producto); die;
                // $productoActual+= 1; 
                $productoActual = new Producto(1,"2","3",3,4,5); //PREGUNTAR QUE PASA ACÁ
                $productoActual = $productoActual->restaurarProducto($producto);
                
                // var_dump($productoActual); die;
                $productoActual->cantidad = $productoActual->getTotalProductos($conn);
                // var_dump($producto); die;
                $productoActual->setValoracion($conn);//borrar si rompi algo
                $productos[] = $productoActual;
                // $productoActual = null;
                // var_dump($productos); echo "<br><br><br>";
                // echo $productoActual->id();
            }
                    
                 
            return $productos;

        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            return $e;
        }
    }


    public function getProductosByVendedor (PDO $conn, int $id, int $offset = null) {

        $sql = "select * from productos where id_usuario = :id order by fecha desc limit 8";
        if ($offset) $sql = $sql. " offset ". 8*$offset;
        $query = $conn->prepare($sql);
        $query->bindValue(":id",$id, PDO::PARAM_INT);
        
        try {
            //code...
            // $query->setFetchMode(PDO::FETCH_CLASS, "Usuario");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            if ($result) {

                $productos = array();
                foreach ($result as $producto) {
                    // var_dump($producto); die;
                    // $productoActual+= 1; 
                    $productoActual = new Producto(1,"2","3",3,4,5); //PREGUNTAR QUE PASA ACÁ
                    $productoActual = $productoActual->restaurarProducto($producto);
                    
                    // var_dump($productoActual); die;
                    $productoActual->cantidad = $productoActual->getTotalProductos($conn);
                    // var_dump($producto); die;
                    $productoActual->setValoracion($conn);//borrar si rompi algo
                    $productos[] = $productoActual;
                    // $productoActual = null;
                    // var_dump($productos); echo "<br><br><br>";
                    // echo $productoActual->id();
                }
                    
                return $productos;
                
            } else return false;
            
        } catch (\Exception $e) {
            //throw $th;
            echo $e . "<br>";
            
        }

    }
}

?>