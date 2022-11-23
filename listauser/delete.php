<?php
session_start();
include('../conexao.php');



if(!empty($_GET['id'])){
    $id = $_GET['id'];


    $sqlSelect = "SELECT * FROM usuario WHERE ID=$id";
    
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        
        $sqlDelete = "DELETE FROM usuario WHERE ID = $id";
        $resultDel = $conexao->query($sqlDelete);
    }
    
}

header("location: ../listauser/listauser.php")


?>