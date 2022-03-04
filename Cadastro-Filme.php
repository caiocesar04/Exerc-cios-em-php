<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Cadastro de Filmes</title>
</head>
<body>


<?php
include("Menu.php");
?>
<h3> Cadastro de Filmes</h3>
<form name = "cadFilmes" action="Gravar-Filme.php" method="post">
<p><label>Título</label>
<input type="text" name="titulofilme"></p>
<p><label>Duração</label>
<input type="text" name="duracaofilme"></p>
<p><label>Valor</label>
<input type="text" name ="valorLocacao"></p>
<p><label>Categoria</label>
<select name="idCategoria">


<?php
$rsCategoria = mysqli_query($conexao,"select * from tbcategorias");
$linhas = mysqli_num_rows($rsCategoria);
for($i=0;$i<$linhas;$i++){
$dados = mysqli_fetch_array($rsCategoria);
$idCategoria = $dados["idCategoria"];
$nomeCategoria = $dados["nomeCategoria"];
echo "<option value='$idCategoria'>$nomeCategoria</option>";
}
?>
  </select>
</p>
<p> <input type="submit" value="Gravar"></p>
</form>
</body>
</html>
