<?php
    include_once("conexao.php");
    $pesquisa = $_GET["pesquisa"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lista de Filmes - Locadora IFPR</title> 
</head>
<body>
<h1> Pesquisa de Filmes</h1>
<form name="pesquisa" action="Pesquisa_Filmes.php" method="get">
<label>Pesquisa de Filmes</label> <input type="text" name="pesquisa">
<input type="submit" value ="Pesquisar">
</form>
<h2>Resultados</h2>
<?php
$sqlRegistros = mysqli_query($conexao, "select tituloFilme, nomeCategoria from tbfilmes inner join tbcategorias on tbfilmes.idCategoria = tbcategorias.idCategoria
where tituloFilme like '%$pesquisa%'");
$num_linhas = mysqli_num_rows($sqlRegistros);
echo "<table border='1'>";
echo "<tr><th> Titulo do Filme </td><td>Categoria</tr>";

for($i;$i<$num_linhas;$i++){
    $dados = mysqli_fetch_array($sqlRegistros);
    $tituloFilme = $dados["tituloFilme"];
    $nomeCategoria = $dados["nomeCategoria"];
    echo "<tr> <td>$tituloFilme</td><td>$nomeCategoria</tr>";
    }
?>

</body>
</html>

