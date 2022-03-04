<?php
include("conexao.php");
$tituloFilme = $_POST["titulofilme"];
$duracaoFilme = $_POST["duracaofilme"];
$valorLocacao = $_POST["valorLocacao"];
$idCategoria = $_POST["idCategoria"];
$sqlGravarFilme = mysqli_query($conexao, "insert into tbfilmes(titulofilme,duracaoFilme,valorLocacao,idCategoria)
value('$tituloFilme','$duracaoFilme','$valorLocacao','$idCategoria')") or die("Erro ao Gravar Registro." . mysqli_error($conexao));
header('Location: Lista-filmes.php');
?>
