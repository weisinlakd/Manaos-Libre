<?php 

    // var_dump($_POST);


    $usuario['email'] = $_POST['email'];
    $usuario['pass'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $usuario['remember-me'] = isset($_POST['remember-me']) ? $_POST['remember-me'] : null;

    // var_dump($usuario);

    function leerSession() {

        session_start();
        
        return $_SESSION['usuario'];
    }
    

    function validarUsuario($usuario) {

        $usuarios= file_get_contents("../db/usuarios.json");
        $usuariosArray= json_decode($usuarios, true);
        $bool = false;

        for ($i=0; $i < count($usuariosArray); $i++) { 
            # code...
            if ($usuario['email'] == $usuariosArray[$i]['email']){
                $hash = $usuariosArray[$i]['pass'];
                
                $bool = password_verify($_POST['password'], $hash);
                
            }

            if ($bool){
                // echo 'log correcto';
                session_start();
                return $_SESSION['usuario'] = $usuariosArray[$i];
                 
            }
            //var_dump($usuariosArray);
        }

        // echo 'no pudiste logear';
        return false;
    }
    

    $usuario = validarUsuario($usuario);

    if ($usuario != false){
        $usuarioLog = true;
    } else $usuarioLog = false;
    
?>