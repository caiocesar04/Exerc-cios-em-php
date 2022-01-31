<!DOCTYPE html>
<html>
<body>

<form action="" method="post">
Insira o primeiro numero : <input type="numero" value="" name="num1">
<br>
insira segundo numero<input type="numero" value="" name="num2">
<br>
<input type = "submit" value ="comparar valores">
<br>
Qual numero é maior?
</form>

<?php
if (isset($_POST['num1'])) {
    $numero1 = $_POST['num1'] ?? 0; $numero2 = $_POST['num2'] ?? 0;

  echo $numero1 . " ou " . $numero2 . "<br>";


  if ($numero1 != "") {

    if ($numero1 > $numero2) { echo "O  $numero1 é maior que o $numero2";
    } 
    elseif ($numero1 < $numero2) { echo " o $numero2 é maior que o $numero1";
    } 
    else { echo "os numeros são iguais"; 
    }
  }
}
    ?>
</body>
</html>
