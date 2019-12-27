<?php

var_dump($_POST);
echo '<br>';

$array = $_POST;
 foreach ($array as $key => $value) {
     # code...

     //echo $value;
    if ($value)
    echo $key." =>   ".$value.'<br>';
 }
?>