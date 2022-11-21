<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contabilidade Gil</title>
    <link rel="stylesheet" href="style2.css" />
</head>
<body>
    <div class="main"> 
        <div class="header">
            <?php include('C:\xampp\htdocs\TCC\menu\menu.php') ?>
        </div>
        <div class="box"> 
            <div class="box-Login">
                <h2>Login</h2> 
                    <form action="login.php" method="POST"  class="box-Login-interno">
                        <div class="login-usuario">
                            <input class="input-usuario" type="text" required="required" placeholder="Email" name="email">
                        </div>
                        <div class="login-senha">
                            <input class="input-senha" type="password" required="required" placeholder="Senha" name="senha">
                        </div>
                        <div class="login-submit">
                            <input type="submit" value="Enviar">
                        </div>
                    </form>
            </div>
            <div class="risco"></div>
            <div class="box-registro">
                <div class=box-registro-int>
                    <img src="/TCC/pagina_login/assets/undraw_Searching_re_3ra9-removebg-preview.png" class="img-reg">
                    <p>Não possui conta?</p>
                    <a href="/TCC/Registro/Register.php" class="hl-reg">Registrar-se agora</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>