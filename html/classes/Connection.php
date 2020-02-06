<?php 

    class Connection  {

        private $dsn = 'mysql:host=127.0.0.1;dbname=mydb;port=3306';
        private $user = 'root';
        private $pass = 'obcc-40b'; 

        public function __construct() {
            $this->dsn;
            $this->user;
            $this->pass;
        }

        public function start () {

            try {
                $conn = new PDO($this->dsn, $this->user, $this->pass);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch(PDOException $e){
               
                echo "<br>" . $e->getMessage() . "<br>";
        
            }

            return $conn;
        }
    }
    
?>