<?php
include_once("conexao.php");
echo"<h1> Selecionando registro usando FOR </h1>";
$sqlRegistros = mysqli_query($conexao,"select * from tbfilmes");
$num_linhas = mysqli_num_rows($sqlRegistros);//retorna para a váriavel o numero total de linhas contendo registro//

for($i=0;$i<$num_linhas;$i++){
    $dados = mysqli_fetch_array($sqlRegistros);
    $idFilme = $dados["idFilme"];
    $tituloFilme = $dados["titulofilme"];
    $duracaoFilme = $dados["duracaoFilme"];
    $valorLocacao = $dados["valorLocacao"];

    echo "Código: $idFilme | Título :$tituloFilme|Duração $duracaoFilme|Valor $valorLocacao<br>";




}
