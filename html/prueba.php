<?php
var_dump($_POST);
$email = $_POST["email"];
echo "PHP Version: ".phpversion().'<br>';
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo $email.'<br>';
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));


}

else{
    setcookie("emailIncorrecto",$_POST["email"],time() + 10);
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)); ?>
    <script>window.location.replace('sign-in.php')</script>
<?php } ?>
