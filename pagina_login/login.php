<?php
session_start();
include('../conexao.php');

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select *, count(*) as 'total' from usuario where Email = '$email' and Senha = '$senha'";
$result = mysqli_query($conexao,$sql);
$usuario = mysqli_fetch_assoc($result);

var_dump($usuario,$email,$senha);
if(intval($usuario['total']) >0 ){
    $_SESSION['Email'] = $email;   
    header('location: ../pagina_init/index.php');   
}else{
    header('location: telaLogin.php');
}
?>