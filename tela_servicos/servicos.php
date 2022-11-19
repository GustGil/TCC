<!DOCTYPE html>
<html lang="en">
<?php
include('C:\xampp\htdocs\truecc\TCC\conexao.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contabilidade Gil</title>
    <link rel="stylesheet" href="style4.css" />
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
        <div class="titulo">
            <h1> Serviços</h1>
            <div class="linha"></div>
        </div>
        <div class="cards">
            <div class="cards-int">
                <div class="IR-card">
                    <div class="img">
                        <img src="/TCC/tela_servicos/assets/assessoria-contabil-360x225.png" alt="">
                    </div>
                    <div class="texto">
                        <h2 class="titulo-card">Contabilidade</h2>
                        <div class="p">
                            <p>Demonstramos com exatidão e transparência as informações que auxiliam em tomadas de decisão, através de consultoria e assessoria.</p>
                        </div>
                        <div class="but-saiba">
                            <a href="/TCC/tela_servicos/telas_indie/Contabilidade.php">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="EF-card">
                    <div>
                        <img src="/TCC/tela_servicos/assets/assessoria-fiscal-e-tributaria-360x225.png" alt="">
                    </div>
                    <div class="texto">
                        <h2 class="titulo-card">Escrita Fiscal</h2>
                        <div class="p">
                            <p>Realizamos o processamento da escrita fiscal, observando a legislação tributária aplicável em diversos segmentos de atuação.</p>
                        </div>
                        <div class="but-saiba">
                            <a href="">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="FP-card">
                    <div>
                        <img src="/TCC/tela_servicos/assets/assessoria-trabalhista-360x225.png" alt="">
                    </div>
                    <div class="texto">
                        <h2 class="titulo-card">Folha de Pagamento</h2>
                        <div class="p">
                            <p>
                            Atendemos as necessidades das organizações nas áreas trabalhista e previdenciária, de forma responsável e transparente.
                            </p>
                        </div>
                        <div class="but-saiba">
                            <a href="">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>