<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "bancodedados";
  $dbname = "BDlocadora";

  $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);





  if($conexao->connect_error){
     echo "Desconectado erro: " . $conexao->connect_error;
  }else{
     echo "Conectado";

  }
  ?>
