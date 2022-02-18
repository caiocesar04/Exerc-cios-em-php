<?php

$array1 = array($_POST["num1"],["num2"]);  $array2= array($_POST['2num1'],["2num2"]) ;

$resultado = array();
for($i = 0; $i < 2; $i++){
$resultado = $array1[$i] * $array2[$i];
echo $resultado[$i] ."<br>";
    }

?>
