
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style8.css" />
</head>
<body>
    <div class="main">
        <div class="header">
            <?php include('C:\xampp\htdocs\TCC\menu\menu.php') ?>
        </div>
        <div class="main-block">
            <div class="dados">
                <div class="dado-int">
                    <div class="img">
                        <img src="./assets/icone-utilisateur-gris.png" alt="">
                    </div>
                    <div class="edidado">
                            <ul class="titulo-list">
                                <li>Nome</li>
                                <li>Nome Empresa</li>
                                <li>Email</li>
                                <li>Telefone</li>
                                <li>CNPJ</li>
                            </ul>
                        <div>
                        <?php
                            include("../conexao.php");
                            $id = $_SESSION['id'];

                            $sql = "SELECT * FROM USUARIO WHERE ID ='".$id."'";
                            $result = mysqli_query($conexao,$sql);
                            $usuario = mysqli_fetch_assoc($result);
                            
                            
                            echo "<ul class='list'>";
                            echo "<li class='cont'>:   " .$usuario['Nome']. "</li>";
                            echo "<li class='cont'>:   " .$usuario['Nome_Empresa']. "</li>";
                            echo "<li class='cont'>:   " .$usuario['Email']. "</li>";
                            echo "<li class='cont'>:   " .$usuario['Telefone']. "</li>";
                            echo "<li class='cont'>:   " .$usuario['CNPJ']. "</li>";
                            echo "</ul>";
                            $teste = $_SESSION['teste'];

                        ?>
                        </div>
                    </div>
                    <div class="submit-edit">
                        <a href="../Editar_dados/Edit_user.php?id=<?=$id?>" >Editar Dados</a>
                    </div>
                </div>
            </div>
            <div class="documentos">

            </div>
        </div>

    </div>
</body>
</html>