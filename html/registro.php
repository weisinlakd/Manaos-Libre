<?php 

    var_dump($_FILES);
    echo 'registro';
    // var_dump($usuario);
    
    function validarExtension() {
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        if($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
        return false;
        } else return true;
    }

    function subirAvatar() {
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
          
        move_uploaded_file($_FILES["avatar"]["tmp_name"], "../img/avatar.".$ext);
    }

    function crearUsuario() {
        $usuario = [
          "email"=> $_POST["email"],
          "name"=> $_POST["name"],
          "pass"=> password_hash($_POST["pass"], PASSWORD_DEFAULT),
          "remember-me" => false || $_POST['remember-me']
        ];
          
        $usuarios= file_get_contents("../db/usuarios.json");
        $usuariosArray= json_decode($usuarios, true);

        // falta validar si ya existe el usuario
        $email = $_POST["email"];
        $busqueda= array_column($usuariosArray, "email");
        $index = array_search($email, $busqueda);
        if ($index !== false){
            $user = $usuariosArray[$index];
        return $user;
        }

        $usuariosArray[]= $usuario;
        $usuariosFinal =json_encode($usuariosArray);
        
        file_put_contents("../db/usuarios.json", $usuariosFinal);
        return $usuario;
    }

    $usuario = crearUsuario();


    $usuarioLog = true;

?>