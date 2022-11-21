<!DOCTYPE html>
<html lang="en">
<?php
include('C:\xampp\htdocs\TCC\conexao.php');
?>
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contabilidade Gil</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="main">
        <div class="header">
            <?php include('C:\xampp\htdocs\TCC\menu\menu.php') ?>
        </div>
        <div class="conteudo">
                <div class="titulo_img">
                    <h1 class="h1texto">Deixe a contabilidade da sua empresa com quem entende</h1>
                    <h4 class="h4texto">Profissionais especializados <br> 
                        e dedicados em fazer o sucesso <br>  
                         financeiro da sua empresa acontecer</h4>
                </div>
                <img src="/TCC/pagina_init/assets/superbanner-9.png" class="img-fundo">
        </div>
        <div class="titulo-cards">
            <div class="titulo">
                <h1 class="h1-cards">Sobre</h1>
            </div>
        </div>


        <div class="cards">
            <div class="cards-int">
                <div class="IR-card">
                    <div class="img">
                        <img src="/TCC/tela_servicos/assets/assessoria-contabil-360x225.png" alt="">
                    </div>
                    <div class="texto">
                        <h2 class="titulo-card">Sobre nós</h2>
                        <div class="p">
                            <p>Desde de 2010 no mercado de trabalho, a Contabilidade Gil propõe um trabalho diferenciado, independente do tamanho do problema do cliente.</p>
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
                        <h2 class="titulo-card">Serviços</h2>
                        <div class="p">
                            <p> A Contabilida Gil propõe serviços como, Contabilidade, escrita fiscal e folha de pagamento.</p>
                        </div>
                        <div class="but-saiba">
                            <a href="/TCC/tela_servicos/servicos.php">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="FP-card">
                    <div>
                        <img src="/TCC/tela_servicos/assets/assessoria-trabalhista-360x225.png" alt="">
                    </div>
                    <div class="texto">
                        <h2 class="titulo-card">Fale Conosco</h2>
                        <div class="p">
                            <p>
                            Entre em contato com a nossa empresa
                            </p>
                        </div>
                        <div class="but-saiba">
                            <a href="">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rodape">
            <div class="rodape-int">
                <div class="contato">

                </div>
                <div class="serviços">
                    <div><a href="">Contabilidade</a></div>
                    <div><a href="">Escrita Fiscal</a></div>
                    <div><a href="">Folha de Pagamento</a></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>