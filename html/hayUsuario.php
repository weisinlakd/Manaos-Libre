<?php 

    // var_dump($_POST);
    // echo '<br>'; 

    if (isset($_SESSION['usuario'])==false){
        $usuario['email'] = isset($_POST['email']) ? $_POST['email'] : null;
        $usuario['pass'] = isset($_POST['password']) ? $_POST['password'] : null;
        $usuario['remember-me'] = isset($_POST['remember-me']) ? true : false;

        //echo "entro aca <br><br>";
    } else $usuario = $_SESSION['usuario'];

    // var_dump($usuario);
    // echo '<br>';

    function leerSession($user = null) {

        //session_start();
        if (!$user){
            return $_SESSION['usuario'];
        } else return $_SESSION['usuario'] = $user;
        
    }
    

    function validarUsuario($usuario) {

        $usuarios= file_get_contents("../db/usuarios.json");
        $usuariosArray= json_decode($usuarios, true);
        $bool = false;

        for ($i=0; $i < count($usuariosArray); $i++) { 
            # code...
            if ($usuario['email'] == $usuariosArray[$i]['email']){
                $hash = $usuariosArray[$i]['pass'];
                // echo $hash.'<br>';
                // echo $usuario['pass'].'<br>';
                // echo "USUARIO ==> ";
                // var_dump($usuariosArray[$i])." <br>";
                $bool = password_verify($usuario['pass'], $hash);
                //echo 'pass'.var_dump($bool);
            }

            if ($bool){
                //echo 'log correcto <br>';
                return leerSession($usuariosArray[$i]);
                 
            }
            //var_dump($usuariosArray);
        }

        //echo 'no pudiste logear <br>';
        
        $_SESSION['usuario'] = null;
        return false;
    }
    
    // var_dump($_SESSION);
    // echo '<br><br><br>';
    // var_dump($_SESSION['usuario']);
    // echo '<br><br><br>';


    if (count($_SESSION) == 0){
        echo 'no hay usuario';
        $usuarioLog = false;
    }


    if ($usuario != $_SESSION['usuario']){
        $usuario = validarUsuario($usuario);
    }
    

    //var_dump($usuario);

    if ($usuario != false){
        $usuarioLog = true;
    } else $usuarioLog = false;
    
?>