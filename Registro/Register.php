<!DOCTYPE html>
<html lang="en">

<?php

if (isset($_POST['register'])) {
include('C:\xampp\htdocs\truecc\TCC\conexao.php');

    
    //if( isset($_POST['nomeuser']) && isset($_POST['email']) && isset($_POST['nome_emp']) 
       //&& isset($_POST['cpf_cnpj']) && isset($_POST['senha'])) {
       $nomeuser = $_POST['nomeuser'];
       $email = $_POST['email'];
       $nome_emp = $_POST['nome_emp'];
       $cpf_cnpj = $_POST['cpf_cnpj'];  
       $senha = $_POST['senha'];
    
     $result = mysqli_query($conexao, "INSERT INTO usuario(nomeuser, nome_emp, email, senha, cpf_cnpj) 
     VALUES('$nomeuser', '$nome_emp', '$email', '$senha', '$cpf_cnpj')");
    }
   
//}

?>   

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contabilidade Gil</title>

    <title>Contabilidade Gil</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="logo">
                <a href="/TCC/pagina_init/index.php"><img src="" alt=""></a>
            </div>
            <div class="menu">
                <div>
                    <a href="/TCC/tela_servicos/servicos.php">Serviços</a>
                </div>
                <div>
                    <a href="">Sobre nós</a>
                </div>
                <div>
                    <a href="/TCC/pagina_login/telaLogin.php" class="botao_login" style="text-decoration: none">Entrar</a> 
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-registro">
                    <div class="title">
                        <h2>Registro</h2>
                    </div>
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <input class="input-usu" type="text" placeholder="Usuario" required="required" name="nomeuser">
                        </div>
                        <div class="form-group">
                            <input class="input-ema" type="text" placeholder="E-mail" required="required" name="email">
                        </div>
                        <div class="form-group">
                            <input class="input-nom" type="text" placeholder="Nome da Empresa" required="required" name="nome_emp">
                        </div>
                        <div class="form-group">
                            <input class="input-CNP" type="number" placeholder="CNPJ" required="required" name="cpf_cnpj">
                        </div>
                        <div class="form-group" >
                            <input class="input-sen" type="password" placeholder="Senha" required="required" name="senha">
                        </div>
                        
                        <div class="submit"> 
                        <input class='btn btn-success' type="submit" value="Registrar" required="required" name="register">
                    </div>
                    </form>
            </div>
            <div class="img">
                <img src="/TCC/Registro/assets/undraw_Business_plan_re_0v81__1_-removebg-preview.png" alt="">
            </div>
        </div>


    </div>
</body>
</html>
