
const cabecalho = `
    <div class="suposto_botao"></div>
    <header>
        <section class="cab_do_cab">
            <div class="logo">
                <img src="../midia/img/logo-desenho.png" alt="asd">
                <p class="titulo_logo">JM</p>
            </div>
            <div class="contem_navegacao">
                <div class="contem_nav" onclick="ircarrinho()" id="carrinho">
                    <nav>
                        <img src="../midia/icones/carrinho.png" alt="">
                    </nav>
                </div>
                <div class="contem_nav" onclick="aparecer_fantasma()" id="menu">
                    <nav>
                        <img src="../midia/icones/icone_menu.png" alt="">
                    </nav>
                </div>
            </div>
        </section>
    </header>

    <div class="menu_fantasma" id="fantasma">
        <div class="casca,center_001" id="casca">
            <div class="sair_fantasma" onclick="sumir_fantasma()">x</div>
            <div class="lista" id="lista_001">
                <ul>
                    <a href="index.php">
                        <li>home</li>
                    </a>
                    <a href="forma.php" onclick="document.cookie='produto = bone'">
                        <li>bone</li>
                    </a>
                    <a href="forma.php" onclick="document.cookie='produto = regatas'">
                        <li>regatas</li>
                    </a>
                    <a href="forma.php" onclick="document.cookie='produto = moletons'">
                        <li>moletons</li>
                    </a>
                    <a href="forma.php" onclick="document.cookie='produto = caneca'">
                        <li>canecas</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <div class="invisivel" onclick="sumir_fantasma()"></div>

`;

var bodi = document.getElementById("bodi");
bodi.innerHTML += cabecalho;
