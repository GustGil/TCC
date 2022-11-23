<?php
session_start();


include('../conexao.php');

if(isset($_POST['salvar'])){
    $id =  $_POST['id'];
    $name = $_POST['name'];
    $name_emp = $_POST['nome_emp'];
    $email = $_POST['email'];
    $telefone = $_POST['numero'];
    $cnpj = $_POST['cnpj'];

    $sqlUpdate = "UPDATE usuario SET Nome='$name', Nome_Empresa='$name_emp', Email='$email', Telefone='$telefone', CNPJ='$cnpj' WHERE id = '$id'";

    $result = $conexao->query($sqlUpdate);
}


header('location: ../pagina_perfil/tela_perfil.php')
?>