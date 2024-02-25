<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JM - Carrinho</title>
    <link rel="shortcut icon" href="../midia/img/logo-desenho.png" type="image/x-icon">
    <link rel="stylesheet" href="../estilos/global.css">
    <link rel="stylesheet" href="../estilos/animacao.css">
    <link rel="stylesheet" href="../estilos/carrinho.css">
    <style>
        .suposto_botao {
            display: none;
        }

        #menu , #carrinho {
            display: none;
        }
    </style>
</head>
<body id="bodi">
    <?php 
        include("../interacao/calculo_carrinho.php")
    ?>
    <main>
        <div class="mostrar_pouco"></div>
        <section class="carrinho">
            <div class="titulo">seu carrinho</div>
        </section>
        <section class="finalizar">
            <div class="conteudo_finalizar">
                <div class="info_finalizar">total :</div>
                <div class="preco_da_roupa">
                        <div class="sifrao">R$</div>
                        <div class="valor"><?=$preco_total_formatado?></div>
                </div>
                <div class="botton_finalizar">
                    <button>finalizar compra</button>
                </div>
            </div>
        </section>
        <section class="produtos_escolhidos">
            <div class="produto_carrinho">
                <div class="imagem_do_produto">
                    <img src="../midia/img/foto001.jpeg" alt="">
                </div>
                <div class="info_carrinho">
                    <div class="titulo_da_roupa">
                        <h2>blusa branca</h2>
                    </div>
                    <div class="preco_da_roupa">
                        <div class="sifrao">R$</div>
                        <div class="valor">60,00</div>
                    </div>
                </div>
                <div class="quantidade">
                    <div class="seta_cima" onclick="adicionar()">
                        <img src="../midia/icones/seta_cima.png" alt="">
                    </div>
                    <div class="quant">1</div>
                    <div class="seta_baixo" onclick="remover()">
                        <img src="../midia/icones/seta_baixo.png" alt="">
                    </div>
                </div>
                <div class="lixeira"></div>
            </div>
            <div class="ocupar_espaco"></div>
            <div class="produto_carrinho">
                <div class="imagem_do_produto">
                    <img src="../midia/img/foto003.jpeg" alt="">
                </div>
                <div class="info_carrinho">
                    <div class="titulo_da_roupa">
                        <h2>blusa branca</h2>
                    </div>
                    <div class="preco_da_roupa">
                        <div class="sifrao">R$</div>
                        <div class="valor">63,00</div>
                    </div>
                </div>
                <div class="quantidade">
                    <div class="seta_cima" onclick="adicionar()">
                        <img src="../midia/icones/seta_cima.png" alt="">
                    </div>
                    <div class="quant">1</div>
                    <div class="seta_baixo" onclick="remover()">
                        <img src="../midia/icones/seta_baixo.png" alt="">
                    </div>
                </div>
                
                <div class="lixeira"></div>
            </div>
            <div class="ocupar_espaco"></div>
            <div class="produto_carrinho">
                <div class="imagem_do_produto">
                    <img src="../midia/img/foto004.jpeg" alt="">
                </div>
                <div class="info_carrinho">
                    <div class="titulo_da_roupa">
                        <h2>blusa marron</h2>
                    </div>
                    <div class="preco_da_roupa">
                        <div class="sifrao">R$</div>
                        <div class="valor">58,00</div>
                    </div>
                </div>
                <div class="quantidade">
                    <div class="seta_cima" onclick="adicionar()">
                        <img src="../midia/icones/seta_cima.png" alt="">
                    </div>
                    <div class="quant">1</div>
                    <div class="seta_baixo" onclick="remover()">
                        <img src="../midia/icones/seta_baixo.png" alt="">
                    </div>
                </div>
                
                <div class="lixeira"></div>
            </div>
            <div class="ocupar_espaco"></div>
            <div class="produto_carrinho">
                <div class="imagem_do_produto">
                    <img src="../midia/img/foto005.jpeg" alt="">
                </div>
                <div class="info_carrinho">
                    <div class="titulo_da_roupa">
                        <h2>urso ninja</h2>
                    </div>
                    <div class="preco_da_roupa">
                        <div class="sifrao">R$</div>
                        <div class="valor">65,00</div>
                    </div>
                </div>
                <div class="quantidade">
                    <div class="seta_cima" onclick="adicionar()">
                        <img src="../midia/icones/seta_cima.png" alt="">
                    </div>
                    <div class="quant">1</div>
                    <div class="seta_baixo" onclick="remover()">
                        <img src="../midia/icones/seta_baixo.png" alt="">
                    </div>
                </div>
                
                <div class="lixeira"></div>
            </div>
            <div class="ocupar_espaco"></div>
            <div class="produto_carrinho">
                <div class="imagem_do_produto">
                    <img src="../midia/img/foto006.jpeg" alt="">
                </div>
                <div class="info_carrinho">
                    <div class="titulo_da_roupa">
                        <h2>duas caras</h2>
                    </div>
                    <div class="preco_da_roupa">
                        <div class="sifrao">R$</div>
                        <div class="valor">61,00</div>
                    </div>
                </div>
                <div class="quantidade">
                    <div class="seta_cima" onclick="adicionar()">
                        <img src="../midia/icones/seta_cima.png" alt="">
                    </div>
                    <div class="quant">1</div>
                    <div class="seta_baixo" onclick="remover()">
                        <img src="../midia/icones/seta_baixo.png" alt="">
                    </div>
                </div>
                
                <div class="lixeira"></div>
            </div>
            <div class="ocupar_espaco"></div>
            <div class="produto_carrinho">
                <div class="imagem_do_produto">
                    <img src="../midia/img/foto007.jpeg" alt="">
                </div>
                <div class="info_carrinho">
                    <div class="titulo_da_roupa">
                        <h2>blusa beje</h2>
                    </div>
                    <div class="preco_da_roupa">
                        <div class="sifrao">R$</div>
                        <div class="valor">60,00</div>
                    </div>
                </div>
                <div class="quantidade">
                    <div class="seta_cima" onclick="adicionar()">
                        <img src="../midia/icones/seta_cima.png" alt="">
                    </div>
                    <div class="quant">1</div>
                    <div class="seta_baixo" onclick="remover()">
                        <img src="../midia/icones/seta_baixo.png" alt="">
                    </div>
                </div>
                
                <div class="lixeira"></div>
            </div>
            <div class="ocupar_espaco"></div>
            <div class="produto_carrinho">
                <div class="imagem_do_produto">
                    <img src="../midia/img/foto008.jpeg" alt="">
                </div>
                <div class="info_carrinho">
                    <div class="titulo_da_roupa">
                        <h2>blusa branca</h2>
                    </div>
                    <div class="preco_da_roupa">
                        <div class="sifrao">R$</div>
                        <div class="valor">60,00</div>
                    </div>
                </div>
                <div class="quantidade">
                    <div class="seta_cima" onclick="adicionar()">
                        <img src="../midia/icones/seta_cima.png" alt="">
                    </div>
                    <div class="quant">1</div>
                    <div class="seta_baixo" onclick="remover()">
                        <img src="../midia/icones/seta_baixo.png" alt="">
                    </div>
                </div>
                
                <div class="lixeira"></div>
            </div>
        </section>
        <div class="mostrar_tantao"></div>
    </main>



    <script src="../interacao/criar_cabecalho.js"></script>
    <script src="../interacao/aparecer_fantasma.js"></script>
    <script src="../interacao/voltar.js"></script>
</body>
</html>