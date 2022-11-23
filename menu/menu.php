<?php session_start() 

?>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .menu{
            display: flex;
            height: 60px;
            width: 300px;
            justify-content: space-around;
            align-items: center;
        }
        a{
            color: aliceblue;
            text-decoration: none;
        }
        .header{
            background-color: #084d6e;
            display: flex;
            height: 60px;
            width: 100%;
            justify-content: space-between;
        }
        .img-logo{
            height: 50px;
        }

    </style>
</head>
<body>
<div class="header">
            <div class="logo">
                <a href="/TCC/pagina_init/index.php"><img class='img-logo' src="/TCC/menu/imagem_2022-11-22_085550699-removebg-preview.png" alt=""></a>
            </div>
            <div class="menu">
                <div>
                    <a href="/TCC/tela_servicos/servicos.php">Serviços</a>
                </div>
                <div>
                    <a href="">Sobre nós</a>
                </div>
                <?php if(isset($_SESSION['Email'])){?>
                    
                <div>
                    <a href="/TCC/pagina_perfil/tela_perfil.php" class="botao_login" style="text-decoration: none">Meu Perfil</a> 
                </div>
                <div>
                    <a href="/TCC/pagina_login/logout.php" class="botao_login" style="text-decoration: none">Sair</a> 
                </div>
                    <?php }else{?>
                <div>
                    <a href="/TCC/pagina_login/telaLogin.php" class="botao_login" style="text-decoration: none">Entrar</a> 
                </div>
                    <?php }?>
            </div>
</div>

</body>
