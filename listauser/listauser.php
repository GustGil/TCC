<?php
include('../conexao.php');

$sql = "SELECT * FROM usuario ORDER BY id DESC";

$result = $conexao->query($sql);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style10.css" />
    <script src="https://kit.fontawesome.com/fed07408ab.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="logo">
                <a href="/TCC/pagina_init/index.php"><img class='img-logo' src="/TCC/menu/imagem_2022-11-22_085550699-removebg-preview.png" alt=""></a>
            </div>
            <div class="menu">
                <div>
                    <a href="">Lista de Serviços</a>
                </div>
                <div>
                    <a href="/TCC/pagina_login/logout.php" class="botao_login" style="text-decoration: none">Sair</a> 
                </div>
            
            </div>
        </div>

    <div class="main2">
    <tbody class="list-titulo">
        <ul>
            <li class='ID_topic_tit'>ID</li>
            <li class='nome_topic_tit'>Nome</li>
            <li class='nome_emp_topic_tit'>Nome da Empresa</li>
            <li class='email_topic_tit'>Email</li>
            <li class='telefone_topic_tit'>Telefone</li>
            <li class='cnpj_topic_tit'>CNPJ</li>
        </ul>
</tbody>

    <tbody>
        <?php
        while($user_data = mysqli_fetch_assoc($result)){
            echo "<ul class='list'>";
            echo "<li class='ID_topic'>".$user_data['ID']."</li>";
            echo "<li class='nome_topic'>".$user_data['Nome']."</li>";
            echo "<li class='nome_emp_topic'>".$user_data['Nome_Empresa']."</li>";
            echo "<li class='email_topic'>".$user_data['Email']."</li>";
            echo "<li class='telefone_topic'>".$user_data['Telefone']."</li>";
            echo "<li class='cnpj_topic'>".$user_data['CNPJ']."</li>";
            echo "<div class='divdel'>
                    <div class='btnback'>
                        <a class='delbtn' href='delete.php?id=".$user_data['ID']."'> Deletar </a>
                    </div>
                <div>";
           
            echo "</ul>";
        }
                
        ?>
    
    </tbody>
    </div>
</body>
</html>