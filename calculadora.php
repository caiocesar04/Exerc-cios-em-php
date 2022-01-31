<?php
$resposta_calculo=null

for ($i=0;$i<4;$i++)
$sel[]=null;

if(isset($_GET['num1']) && isset($_GET['num2']))
{
	switch ($_GET['num'])
	{
	  //operações de multiplicação(adição,multiplicação)//
	case '+':
		$resposta_calculo = $_GET['num1'] +  $_GET['num2']; $sel[0]= 'selected';
		break;
    case '*':
		$resposta_calculo = $_GET['num1'] *  $_GET['num2']; $sel[1]= 'selected';
		break;
		//operações de subtração(subtração e divisão)//
		case '-':
		$resposta_calculo = $_GET['num1'] -  $_GET['num2']; $sel[2]= 'selected';
		break;
	case '/':
		$resposta_calculo = $_GET['num1'] /  $_GET['num2']; $sel[3]= 'selected';
		break;
	}	
	else{
	$_GET['num1']='0'; $_GET['num']='+'; $_GET['num2']='0';
}

}
?>
