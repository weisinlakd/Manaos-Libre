<?php 
    class Usuario  {
        
        private $id;
        private $name;
        private $email;
        private $password;
        private $isAdmin = 0;
        private $apellido;
        private $direccionID;
        private $telefono;
        private $fechaCreacion;
        private $foto;
        private $rememberMe;
        private $estado = 1;
        private $yaExiste;

        public function __construct($name, $email, $password , $foto = null, $rememberMe = null){
            $this->name = $name;
            $this->email = $email;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $ext = $this->validarExtension();
            $this->foto = $foto != 'error' ? "../db/img/$this->email".".".$ext : 'error';
            $this->rememberMe = $rememberMe; 
        }  
        
        
        
        public function crearUsuario (PDO $conn) {
            # code...
            $sql = "INSERT INTO usuarios 
                set name = :name , email = :email, password = :password, foto = :foto, remember_me = :rememberMe";
            $query = $conn->prepare($sql);
            $query->bindValue(":name",$this->name, PDO::PARAM_STR);
            $query->bindValue(":email",$this->email, PDO::PARAM_STR);
            $query->bindValue(":password",$this->password, PDO::PARAM_STR);
            $query->bindValue(":foto",$this->foto, PDO::PARAM_STR);
            $query->bindValue(":rememberMe",$this->rememberMe, PDO::PARAM_STR);
            
            // $ext = $this->validarExtension();

            // if (!$ext) return "a";

            try {
                //code...
                $result = $query->execute();
                if ($result){
                    $this->subirFoto();
                $this->id = $conn->lastInsertId(); //SI SE ROMPIO ALGO BORRAR ESTO
                    echo "usuario creado!";
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

        public function isAdmin () {
            return $this->isAdmin;
        }
        public function yaExiste () {
            return $this->yaExiste;
        }

        public function foto () {
            return $this->foto;
        }

        public function setFoto ($ext) {
            if ($ext){

                $this->foto = "../db/img/$this->email".".".$ext;
            } else return;
        }

        public function name () {
            return $this->name;
        }

        public function setName ($name) {
            $this->name = $name;
        }

        public function apellido () {
            return $this->apellido;
        }

        public function setApellido ($apellido) {
            $this->apellido = $apellido;
        }

        public function fechaCreacion () {
            return $this->fechaCreacion;
        }

        public function email () {
            return $this->email;
        }

        public function direccionID () {
            return $this->direccionID;
        }

        public function setDireccionID ($direccionID) {
            $this->direccionID = $direccionID;
        }

        public function telefono () {
            return $this->telefono;
        }

        public function setTelefono ($telefono) {
            $this->telefono = $telefono;
        }

        public function password () {
            return $this->password;
        }

        public function setPassword ($password) {
            $this->password = $password;
        }

        public function iniciarSesion (PDO $conn , string $email, string $passsword) {

            $usuarioDB = $this->getByEmail($conn, $email);
            // $isPassCorrect = password_verify($passsword, $usuarioDB["password"]); //asoc array
            $isPassCorrect = password_verify($passsword, $usuarioDB->password); //obj
            // var_dump($isPassCorrect);
            // var_dump($usuarioDB);
            
            if ($isPassCorrect) return $usuarioDB;
            return false;
        }
        
        public function getByEmail (PDO $conn, string $email) {

           
            $sql = "select * from usuarios where email = :buscador and estado = 1";
            $query = $conn->prepare($sql);
            $query->bindValue(":buscador",$email, PDO::PARAM_STR);
            
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

        public function subirFoto () {
            // $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
            // echo $this->foto;
            if ($this->foto == 'error') return false;
              
            $result = move_uploaded_file($_FILES["avatar"]["tmp_name"], $this->foto);
    
            return $result;
        }

        public function validarExtension() {
            if (isset($_FILES["avatar"])){

                $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
                if($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
                    return false;
                } else return $ext;
            }
        }
    
        public function restaurarUsuario (object $usuarioDB) {

            $this->id = $usuarioDB->id;
            $this->name = $usuarioDB->name;        
            $this->email = $usuarioDB->email;    
            $this->password = $usuarioDB->password;   
            $this->isAdmin = $usuarioDB->isAdmin;
            $this->apellido = $usuarioDB->apellido;  
            $this->telefono = $usuarioDB->telefono;    
            $this->fechaCreacion = $usuarioDB->fecha_creacion;
            $this->foto = $usuarioDB->foto;    
            $this->rememberMe = $usuarioDB->remember_me;
            $this->estado = 1;

            return $this;
            
        }

        public function updateUsuario (PDO $conn) {
            # code...
            # falta direccionID en sql xq no hay tabla ciudades ni direcciones!
            $sql = "UPDATE usuarios 
                set name = :name , 
                telefono = :telefono,
                apellido = :apellido,
                password = :password, 
                foto = :foto 
                
                WHERE id = :id ";
            $query = $conn->prepare($sql);
            $query->bindValue(":name",$this->name, PDO::PARAM_STR);
            $query->bindValue(":id",$this->id, PDO::PARAM_INT);
            $query->bindValue(":password",$this->password, PDO::PARAM_STR);
            $query->bindValue(":apellido",$this->apellido, PDO::PARAM_STR);
            $query->bindValue(":telefono",$this->telefono, PDO::PARAM_INT);
            $query->bindValue(":foto",$this->foto, PDO::PARAM_STR);
           

            try {
                //code...
                $result = $query->execute();
                if ($result){
                    $this->subirFoto();
                    // echo "usuario modificado!";
                    return true;
                }
            } catch (\Exception $e) {
                //throw $th;
                echo $e . "<br>";
                $a = $e->getCode();
            
                return false;
            }
            
        }
    }
    
?>