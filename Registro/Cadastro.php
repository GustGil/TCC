<?php
session_start();
include('../conexao.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['name']));
$nome_emp = mysqli_real_escape_string($conexao, trim($_POST['nome_emp']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$numero = mysqli_real_escape_string($conexao, trim($_POST['numero']));
$cnpj = mysqli_real_escape_string($conexao, trim($_POST['cnpj']));

$sql = "select count(*) as total from usuario where Email = '$email'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);


if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('location:register.php');
    exit;
}

$sql = "INSERT INTO usuario (Nome,Nome_Empresa,Email,Senha,Telefone,CNPJ) VALUES('$nome','$nome_emp','$email','$senha','$numero','$cnpj')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
$_SESSION['Email'] = $email;   
header('location: ../pagina_init/index.php')

?>