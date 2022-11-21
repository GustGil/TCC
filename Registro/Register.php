<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contabilidade Gil</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="main">
        <div class="header">
            <?php include('C:\xampp\htdocs\TCC\menu\menu.php') ?>
        </div>
        <div class="box">
            <div class="box-registro">
                    <div class="title">
                        <h2>Registro</h2>
                    </div>
                    <form action="cadastro.php" method="POST">
                        <div class="form-group">
                            <input class="input-usu" type="text" placeholder="Usuario" required="required" name="name">
                        </div>
                        <div class="form-group">
                            <input class="input-ema" type="text" placeholder="E-mail" required="required" name="email">
                        </div>
                        <div class="form-group">
                            <input class="input-nom" type="text" placeholder="Nome da Empresa" required="required" name="nome_emp">
                        </div>
                        <div class="form-group">
                            <input class="input-CNP" type="number" placeholder="CNPJ" required="required" name="cnpj">
                        </div>
                        <div class="form-group" >
                            <input class="input-sen" type="password" placeholder="Senha" required="required" name="senha">
                        </div>
                        <div class="form-group" >
                            <input class="input-sen" type="text" placeholder="Telefone" required="required" name="numero">
                        </div>
                        
                        <div class="submit"> 
                            <input class="submit-input" type="submit" value="Registrar" required="required" name="register">
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
