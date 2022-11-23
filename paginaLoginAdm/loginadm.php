<?php
session_start();
include('../conexao.php');

$id = mysqli_real_escape_string($conexao, trim($_POST['id']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select *, count(*) as 'total' from funcionarios where nome = '$nome' and senha = '$senha'";
$result = mysqli_query($conexao,$sql);
$usuario = mysqli_fetch_assoc($result);

var_dump($usuario,$nome,$senha);
if(intval($usuario['total']) >0 ){
    $_SESSION['nome'] = $nome;   
    $_SESSION['id'] = $id;   
    header('location: ../pagina_init/index.php');   
}else{
    header('location: tela_loginAdm.php');
}
?>