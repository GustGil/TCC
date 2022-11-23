
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style9.css" />
</head>
<body>
    <div class="main">
        <div class="header">
            <?php include('../menu/menu.php');
            
            include("../conexao.php");
           
            
            if(!empty($_GET['id'])){
                $id =  $_GET['id'];
                
                $sqlSelect = "SELECT * FROM usuario WHERE id='$id'";
                $result = $conexao->query($sqlSelect);
                $dados = mysqli_fetch_array($result);
                $name = $dados['Nome'];
                $name_emp = $dados['Nome_Empresa'];
                $email = $dados['Email'];
                $telefone = $dados['Telefone'];
                $cnpj = $dados['CNPJ'];
                
            }
            
            ?>
        </div>
        
            <div class="box-registro">
                <div class="box-registro-int">
                    <div class="title">
                        <h2>Edição de Dados</h2>
                    </div>
                    <form  action="Edicao.php" method="POST" class="form">
                        <div class="form-group">
                            <div class="tit-input">Nome</div><P>:</p><input class="input-usu" type="text" value="<?php echo $name ?>" required="required" name="name">
                        </div>
                        <div class="form-group">
                            <div class="tit-input">Email</div><P>:</p><input class="input-ema" type="text" value="<?php echo $email ?>" required="required" name="email">
                        </div>
                        <div class="form-group">
                            <div class="tit-input">Nome da Empresa</div><P>:</p><input class="input-nom" type="text" value="<?php echo $name_emp ?>"required="required" name="nome_emp">
                        </div>
                        <div class="form-group">
                            <div class="tit-input">CNPJ</div><P>:</p><input class="input-CNP" type="number" value="<?php echo $cnpj ?>" required="required" name="cnpj">
                        </div>
                        <div class="form-group" >
                            <div class="tit-input">Telefone</div><P>:</p><input class="input-sen" type="text" value="<?php echo $telefone ?>" required="required" name="numero">
                        </div>
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                        <div class="submit"> 
                            <input class="submit-input" type="submit" value="Salvar" required="required" name="salvar">
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>