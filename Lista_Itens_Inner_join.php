<?php
include_once("conexao.php");
?>
<!DOCTYPE hmtl>
<html>
<head>
<meta charset="utf-8">
<title>Lista de Filmes - Locadora IFPR</title>    
</head>
<body>
<h1>Selecionando registros por categoria</h1>
<?php
$sqlRegistros = mysqli_query($conexao,"select tituloFilme, nomeCategoria 
from tbfilmes inner join
tbcategorias on tbfilmes.idCategoria = tbcategorias.idCategoria");
$num_linhas = mysqli_num_rows($sqlRegistros);
echo "<table border='1'>";
echo "<tr> <th> Titulo do Filme</th><th>Categoria</th></tr>";

for($i;$i<$num_linhas;$i++){
$dados = mysqli_fetch_array($sqlRegistros);
$tituloFilme = $dados["tituloFilme"];
$nomeCategoria = $dadps["nomeCategoria"];
echo "<tr> <td>$tituloFilme</td><td>$nomeCategoria</tr>";
}
echo"</table>"
?>


</body>
</html>
