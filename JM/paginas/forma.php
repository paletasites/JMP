<?php 
    $titulo_atual = $_COOKIE['produto'] ?? "caneca";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../midia/img/logo-desenho.png" type="image/x-icon">
    <link rel="stylesheet" href="../estilos/global.css">
    <link rel="stylesheet" href="../estilos/animacao.css">
    <link rel="stylesheet" href="../estilos/forma_style_p.css">
    <title>JM - <?= $titulo_atual?></title>
</head>
<body id="bodi">
    <main>
        <section class="titulo">
            <span>
               <h1><?= $titulo_atual?></h1>
            </span>
        </section>
        <section class="mostrar_produto">
            <div class="img_produto_esquerda">
                <img src="../midia/img/<?=$titulo_atual?>_esquerdo.png" alt="produto da esquerda">
            </div>
            <div class="img_produto_meio">
                <img src="../midia/img/<?=$titulo_atual?>_meio.png" alt="produto do meio">
            </div>
            <div class="img_produto_direita">
                <img src="../midia/img/<?=$titulo_atual?>_direito.png" alt="produto da direita">
            </div>
        </section>
        <section class="titulo">
            <span>
                <h1>originais</h1>
            </span>
        </section>
        <section class="produtos_prontas">
            <div class="fundo"></div>

            <div class="produto" id="produto001">
                <a href="exclusivo.html" onclick="">
                    <div class="produto_img">
                        <img src="../midia/img/<?=$titulo_atual?>_meio.png" alt="sfhdfh">
                    </div>
                    <div class="info">
                        <div class="produto_nome"><p>Urso ninja</p></div>
                        <div class="produto_preco">
                            <div class="sifrao">R$</div>
                            <div class="preco">60,00</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="produto" id="produto001">
                <a href="exclusivo.html">
                    <div class="produto_img">
                        <img src="../midia/img/<?=$titulo_atual?>_meio.png" alt="sfhdfh">
                    </div>
                    <div class="info">
                        <div class="produto_nome"><p>Urso ninja</p></div>
                        <div class="produto_preco">
                            <div class="sifrao">R$</div>
                            <div class="preco">60,00</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="produto" id="produto001">
                <a href="exclusivo.html">
                    <div class="produto_img">
                        <img src="../midia/img/<?=$titulo_atual?>_meio.png" alt="sfhdfh">
                    </div>
                    <div class="info">
                        <div class="produto_nome"><p>Urso ninja</p></div>
                        <div class="produto_preco">
                            <div class="sifrao">R$</div>
                            <div class="preco">60,00</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="produto" id="produto001">
                <a href="exclusivo.html">
                    <div class="produto_img">
                        <img src="../midia/img/<?=$titulo_atual?>_meio.png" alt="sfhdfh">
                    </div>
                    <div class="info">
                        <div class="produto_nome"><p>Urso ninja</p></div>
                        <div class="produto_preco">
                            <div class="sifrao">R$</div>
                            <div class="preco">60,00</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="produto" id="produto001">
                <a href="exclusivo.html">
                    <div class="produto_img">
                        <img src="../midia/img/<?=$titulo_atual?>_meio.png" alt="sfhdfh">
                    </div>
                    <div class="info">
                        <div class="produto_nome"><p>Urso ninja</p></div>
                        <div class="produto_preco">
                            <div class="sifrao">R$</div>
                            <div class="preco">60,00</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="produto" id="produto001">
                <a href="exclusivo.html">
                    <div class="produto_img">
                        <img src="../midia/img/<?=$titulo_atual?>_meio.png" alt="sfhdfh">
                    </div>
                    <div class="info">
                        <div class="produto_nome"><p>Urso ninja</p></div>
                        <div class="produto_preco">
                            <div class="sifrao">R$</div>
                            <div class="preco">60,00</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <div class="mostrar_pouco"></div>
        <section class="criar_sua">
            <div class="contem_img_criar">
                <img src="../midia/img/<?=$titulo_atual?>_meio.png" alt="blablabla">
            </div>
            <div class="contem_informacao_criar">
                <div class="contem_texto_criar">
                    <span>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt enim consectetur doloremque excepturi ducimus nobis odit distinctio adipisci, fuga voluptas aliquid dignissimos ipsam accusamus dolores eaque at architecto sed omnis!</p>
                    </span>
                </div>
                <div class="contem_botao_criar">
                    <button>ter a minha <div class="mais"><p>+</p></div></button>
                </div>
            </div>
        </section>
        <div class="mostrar_pouco" style="background-color:var(--cor_004);"></div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="../interacao/criar_cabecalho.js"></script>
    <script src="../interacao/aparecer_fantasma.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>