<!DOCTYPE html>
<html>
<body>
  <form  action="" method="POST">
 Nota 1:
  <input type ="text" name="nota1">
  <br> 
 Nota 2:
 
  <input type ="text" name="nota2">
  <br> 
 Nota 3:
  <input type ="text" name="nota3">
  <br>
  Nota 4:
  <input type ="text" name="nota4">
  <br>
  <input type ="submit" name="média"> 
<?php
$nota1 = @$_POST["nota1"];
$nota2 = @$_POST["nota2"];
$nota3 = @$_POST["nota3"];
$nota4 = @$_POST["nota4"];
$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

echo"sua média é: $media "

?>
