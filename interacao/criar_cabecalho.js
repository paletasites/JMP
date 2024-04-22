
const cabecalho = `
<div class="cab_comum">
    <div class="logo_jm">
        <img src="../midia/img/logo-desenho.png" alt="imagem da logo">
        <h1>JM</h1>
    </div>
    <div class="navegacao">
        <nav>
            <div class="carrinho">
                <img src="../midia/icones/carrinho.png" alt="carrinho" onclick="transferir('carrinho.html')">
            </div>
            <div class="menu" id="menu" onclick="menu()">
                <img src="../midia/icones/icone_menu.png" alt="menu">
            </div>
            <div class="casca_menu" id="casca_menu">
                <div class="interior" id="interior">
                    <div class="sair_menu" id="sair_menu" onclick="menu()"><div>X</div></div>
                    <div class="lista_menu_produtos" id="produtos_menu">
                        <ul>
                            <li onclick="lista_menu(0)">home</li>
                            <li onclick="lista_menu(1)">camisa</li>
                            <li onclick="lista_menu(2)">moleton</li>
                            <li onclick="lista_menu(3)">regata</li>
                            <li onclick="lista_menu(4)">bone</li>
                            <li onclick="lista_menu(5)">criar a minha</li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
`;

var cab = document.getElementById("cab_vdd");
cab.innerHTML += cabecalho;
