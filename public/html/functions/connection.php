<?php 
    $dsn = 'mysql:host=127.0.0.1;dbname=mydb;port=3306';
    $user = 'root';
    $pass = 'obcc-40b';

    try {
        $conn = new PDO($dsn, $user, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e){
        $sql = "";
        echo $sql . "<br>" . $e->getMessage();

    }

?>