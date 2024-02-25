<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JM - criar</title>
    <link rel="shortcut icon" href="../midia/img/logo-desenho.png" type="image/x-icon">
    <link rel="stylesheet" href="../estilos/animacao.css">
    <link rel="stylesheet" href="../estilos/criacao.css">
</head>
<body id="bodi">

<?php 
    $produto_titulo = "o seu bone";
    $produto = "../midia/img/bone_meio.png";
?>

    <header>
        <section class="enunciado">
            <div class="contem_logo">
                <img src="../midia/img/logo-desenho.png" alt="">
                <h1>JM</h1>
            </div>
            <h1>customize <?=$produto_titulo?></h1>
        </section>
    </header>

    <main>
        <section class="pre_viu">
            <div class="contem_info_previu">
                <img src=<?=$produto?> alt="" id="imagem">
                <div class="qual_cor">
                    <div class="cor" id="corvermelha" onclick="mudar_cor('vermelho')"></div>
                    <div class="cor" id="corazul" onclick="mudar_cor('azul')"></div>
                    <div class="cor" id="coramarelo" onclick="mudar_cor('amarelo')"></div>
                    <div class="cor" id="corrosa" onclick="mudar_cor('rosa')"></div>
                    <div class="cor" id="corbranco" onclick="mudar_cor('branco')"></div>
                    <div class="cor" id="corpreto" onclick="mudar_cor('preto')"></div>
                </div>
                <div class="contem_tamanho">
                    <div class="tamanho" onclick="tamanho('PP')" id="pp"><div>PP</div></div>
                    <div class="tamanho" onclick="tamanho('P')" id="p"><div>P</div></div>
                    <div class="tamanho" onclick="tamanho('M')" id="m"><div>M</div></div>
                    <div class="tamanho" onclick="tamanho('G')" id="g"><div>G</div></div>
                    <div class="tamanho" onclick="tamanho('GG')" id="gg"><div>GG</div></div>
                </div>
                <div class="quadro_fundo" id="quadro_fundo"></div>
            </div>
        </section>
        <section class="mostrar_tudo"></section>
        <section class="botoes">
            <div class="botao">
                <button id="upload">upload <img src="../midia/icones/upload.png" alt=""></button>
                <button id="trocar">trocar imagem</button>
            </div>
            <div class="botao">
                <button>finalizar</button>
            </div>
        </section>
    </main>

    <script src="../interacao/configurar.js"></script>
    <script src="../interacao/voltar.js"></script>
</body>
</html>