<!DOCTYPE html>
<html>
<body>

<form name="form" method="get">
Insira um número de 1 a 10 : <input type="text" value="" name="numero">
<input type = "submit" value ="tabuada">
</form>
<?php
$numero = (int)@$_GET["numero"];
if($numero > 0 && $numero < 11 )
{
for($i = 0 ; $i < 11; $i++)
{
echo " $i x $numero  = " . $i*$numero . "<br>";
}
}

?>
</body>
</html>
