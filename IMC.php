<!DOCTYPE html>
<html>
<body>
  <form  action="" method="POST">
 informe seu peso (utilize numeros inteiros):
	<br>
<input type ="text" name ="peso" />
<br>
Informe sua altura:
	<br>
<input type ="text" name ="altura" />
<br>
<input type ="submit" value="cacularIMC" />

  </form>


<?php

  $peso = @$_POST['peso']; $altura = @$_POST['altura'];
		
function imc($altura, $peso){
	$altura = str_replace(',', '.', $altura);
	$resultado = $peso/pow($altura, 2);
	return $resultado;
	
	}
	
	echo"seu imc é: " .imc($altura , $peso);
		?>

</body>
</html>

