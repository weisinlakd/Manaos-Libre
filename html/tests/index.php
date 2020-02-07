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
    <h1>modificar usuario</h1>
    <form class="form" action="../updateUsuario.php" method="post" id="registrationForm"
                        enctype="multipart/form-data" oninput='re_pass.setCustomValidity(re_pass.value != pass.value ? "Las contraseñas no coinciden." : "")'>
        <div class="form-group">
                
            <div class="col-xs-6">
                <label for="name">
                    <h4>Nombre(s)</h4></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre(s)" title="enter your first name if any." value="weisin">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="last_name">
                    <h4>Apellido(s)</h4></label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellido(s)" title="enter your last name if any." value="ludueña">
            </div>
        </div>

        <div class="form-group">

            <div class="col-xs-6">
                <label for="phone">
                    <h4>Teléfono</h4></label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" title="enter your phone number if any." value="123">
            </div>
        </div>

        <!-- <div class="form-group">
            <div class="col-xs-6">
                <label for="mobile">
                    <h4>Mobile</h4></label>
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
            </div>
        </div> -->
        <div class="form-group">

            <div class="col-xs-6">
                <label for="email">
                    <h4>Email</h4></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value="asd@asd" readonly>
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="location">
                    <h4>Ciudad</h4></label>
                <input type="text" class="form-control" name="location" id="location" placeholder="Córdoba" title="enter a location" value="">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="exampleFormControlFile1">
                <h4>Cargá tu foto! (Opcional) <i class="zmdi zmdi-camera"></i> </h4>
                </label>
                    <input name="avatar" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
            <label for="password"><h4>Contraseña</h4></label>

                <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" title="enter your password." value="asd">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="re_pass">
                    <h4>Repita la contraseña</h4></label>
                <input type="password" class="form-control" name="re_pass" id="re_pass" placeholder="Repetir Contraseña" title="enter your password again." value="asd">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <br>
                <button class="site-btn" style="background: inherit;" type="submit"> Guardar</button>
                <button class="site-btn" style="background: inherit;" type="reset"> Restaurar</button>
            </div>
        </div>
    </form>
</body>
</html>