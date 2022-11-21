<?php
//$conn = mysqli_connect('localhost', 'root', '123456') or die ("Não possível conectar ao banco de dados");
//$banco = mysqli_select_db($conn, 'TCC');
$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'Contabilidade_Gil';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//if($conexao->connect_errno){ 
  //  echo "ERRO";
//}
//else {
    //echo "Conexão efetuada com sucesso";
//}
?>