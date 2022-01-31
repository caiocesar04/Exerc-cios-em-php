<!DOCTYPE html>
<body>


<?php
$resposta_calculo=null;
for ($i=0;$i<4;$i++)
	$sel[]=null;
if(isset($_GET['num1']) && isset($_GET['num2']))
{
switch ($_GET['num'])
	{
	case '+': $resposta_calculo = $_GET['num1'] +  $_GET['num2'];$sel[0]= 'selected'; break;
	case '-': $resposta_calculo = $_GET['num1'] -  $_GET['num2']; $sel[1]= 'selected'; break;
	case '*': $resposta_calculo = $_GET['num1'] *  $_GET['num2']; $sel[2]= 'selected'; break;
	case '/': $resposta_calculo = $_GET['num1'] /  $_GET['num2']; $sel[3]= 'selected'; break;
	}	
}
?>
<form>
    Informe dois números e escolha a operação que deseja fazer
    <br>
    (Soma,Subtração,Multipliação,Divisão). 
    <br>
    Depois, clique no botão com sinal e igual para exibir o resultado
    <br>
    <br>
	<input  type = number name = "num1" value = "<?=$_GET['num1'] ?>"/>
	<select name = "num">
        //soma// <option <?= $sel[0]?>>+</option> //subtração// <option <?= $sel[1]?>>-</option> //multoplicação// <option <?= $sel[2]?>>*</option> //divisão // <option <?= $sel[3]?>>/</option>
	</select>
	<input type = number name = "num2" value = "<?=$_GET['num2']?>"/>
	<button>=</button>
	<?=$resposta_calculo?>
</form>
</body>
</html>
