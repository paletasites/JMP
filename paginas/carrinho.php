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
                        <div class="valor" id="valor"></div>
                </div>
                <div class="botton_finalizar">
                    <button>finalizar compra</button>
                </div>
            </div>
        </section>

    <?php 
    
        $carrinho = [
            [
                1,
                'camiseta branca',
                68.00,
                false,
                '../midia/img/foto003.jpeg'
            ],
            [
                1,
                'camiseta preta',
                65.00,
                10.00,
                '../midia/img/foto005.jpeg'
            ],
            [
                2,
                'camiseta beje',
                63.00,
                false,
                '../midia/img/foto006.jpeg'
            ],
            [
                2,
                'urso fofo',
                62.00,
                false,
                '../midia/img/foto008.jpeg'
            ]
        ];

        if(isset($_GET["remover"])){
            $qual_produto = $_GET["remover"];
            if($qual_produto < count($carrinho)){
                $ultimo_produto = $carrinho[3];
                unset($carrinho[$qual_produto]);
                array_push($carrinho,$ultimo_produto);
            };
        };

        if(isset($_GET["aumentar"])){
            $qual_produto = $_GET["aumentar"];
            if($qual_produto < count($carrinho)){
                $carrinho[$qual_produto][0] ++;
            };
            // localhost.setItem("qual_produto",$qual_produto);
            // Pegar com localhost.getItem("qual_produto");
        };

        if(isset($_GET["diminuir"])){
            $qual_produto = $_GET["diminuir"];
            if($qual_produto < count($carrinho)){
                $carrinho[$qual_produto][0] --;
            };
        };

        ?>

    <section class="produtos_escolhidos">
        <?php 

        for($i=0;$i<count($carrinho); $i++){
            if(isset($carrinho[$i])){

                $quant = $carrinho[$i][0];
                $nome = $carrinho[$i][1];
                $preco = $carrinho[$i][2];
                $desconto = $carrinho[$i][3];
                $caminho = $carrinho[$i][4];
        
                echo '<div class="produto_carrinho" id="lista_prod_'.$i.'">
                <div class="imagem_do_produto">
                    <img src="'.$caminho.'" alt="">
                </div>
                <div class="info_carrinho">
                    <div class="titulo_da_roupa">
                        <h2>'.$nome.'</h2>
                    </div>
                    <div class="preco_da_roupa">
                        <div class="sifrao">R$</div>
                        <div class="valor">'.$preco.'</div>
                    </div>
                </div>
                <div class="quantidade">
                    <div class="seta_cima" onclick="aumentar('.$i.')">
                        <img src="../midia/icones/seta_cima.png" alt="">
                    </div>
                    <div class="quant" id="quant">'.$quant.'</div>
                    <div class="seta_baixo" onclick="diminuir('.$i.')">
                        <img src="../midia/icones/seta_baixo.png" alt="">
                    </div>
                </div>
                <div class="lixeira" onclick="remover('.$i.')"></div>
                </div>
                <div class="ocupar_espaco"></div>';
            };
        };
        ?>
    </section>
    <div class="mostrar_tantao"></div>
    </main>

<?php 
    $preco_total = 0;
    for($i=0;$i<count($carrinho); $i++){
        $preco = $carrinho[$i][2];
        $preco_total += $preco;
    };
?>
<script>
    var total = document.getElementById("valor")
    var preco_total = "<?php echo $preco_total?>"
    total.innerText = preco_total

    function remover (qual) {
        var qual = qual
        var caminho = window.location.href

        window.location.href = caminho + "?&remover=" + qual
    }

    function aumentar (qual) {
        var caminho = window.location.href
        window.location.href = caminho + "?&aumentar=" + qual 
    }

    function diminuir (qual) {
        var caminho = window.location.href
        window.location.href = caminho + "?&diminuir=" + qual 
    }
</script>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="../interacao/criar_cabecalho.js"></script>
    <script src="../interacao/aparecer_fantasma.js"></script>
</body>
</html>
