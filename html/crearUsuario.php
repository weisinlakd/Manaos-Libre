<?php 

    var_dump($_POST);
    echo "<br>";
    var_dump($_FILES);
    echo "<br>";
    require_once('classes/Usuario.php');
    require_once('classes/Connection.php');

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rememberMe = isset($_POST["remember_me"]) ? 1 : 0;
    $foto = isset($_FILES["avatar"]) ? true : 'error';

    $conn = new Connection();
    $pdo = $conn->start();

    $usuario = new Usuario($name, $email, $password, $foto, $rememberMe);

    

    
    if (isset($_FILES['avatar']) && $_FILES['avatar']['size'] != 0){
        $ext = $usuario->validarExtension();
        if (!$ext) {
            setcookie('fotoIncorrecta', 'Hubo un problema al cargar la foto!', time()+10);
            setcookie('datosIngresados', serialize($_POST), time() +10); 
            $_SESSION = null; ?>
            <script>window.location.replace('register.php')</script>
        <?php }
    }
    
        
    $resultado = $usuario->crearUsuario($pdo);
    
    $usuarioLog = true;

    if ($usuario->yaExiste()) {
        setcookie('yaExiste', true, time()+10);
        setcookie('datosIngresados', serialize($_POST), time()+10);
        setcookie('mailFoto', $_POST['email'], time()+10);  
        echo "volver al registro"
        ?>
           
           <script>window.location.replace('register.php')</script>
        <?php } else {
           session_start();
           $_SESSION["usuario"] = serialize($usuario);
           require_once('hayUsuario.php');
           if (isset($_POST['remember-me'])){
               setcookie('remember-me', true);
               setcookie('emailCorrecto', $_POST['email']);
           } echo "sesion iniciada"
           ?>
           <script>window.location.replace('home.php')</script>
        <?php  } ?>
    
?>