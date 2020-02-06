<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="crearUsuario.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="name">email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="name">Password</label>  
        <input type="password" name="password">
        <br> 
        <input type="checkbox" name="rememberMe" id="">remember ME
        <br>
        <label for="foto">foto</label>
        <input type="text" name="foto" id="foto">
        <br>
        
        <input type="submit" value="Ir">
        <br><br>
    </form>

    <form action="buscarUsuario.php" method="get">
        <label for="buscar">buscar Por email</label>
        <input type="text" name="buscar" id="buscar">
        <input type="submit" value="Ir">
        <br><br>
    </form>

    <form action="../login.php" method="post">
        <label for="email-log">email</label>
        <input type="text" name="email-log" id="email-log" value="asd@asd">
        <br>
        <label for="password">pass</label>
        <input type="password" name="password" id="password" value="asd">
        <input type="submit" value="Ir">
    </form>
</body>
</html>