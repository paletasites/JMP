<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>algoritimo do carrinho</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        html, body {
            width: 100%;
            height: 100%;
        }

        h1 {
            width: 100%;
            padding-top: 100px;
            font-size: 2em;
            text-align: center;
        }

        .resposta {
            width: 350px;
            height: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            background-color: yellowgreen;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            font-size: 3em;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>algoritimo do carrinho</h1>
    <?php 
    
        $carrinho = [
            [
                0,
                'camiseta branca',
                60.00,
                false,
                '../midia/img/foto_002.jpeg'
            ],
            [
                1,
                'camiseta preta',
                65.00,
                10.00,
                '../midia/img/foto_002.jpeg'
            ],
            [
                2,
                'camiseta beje',
                63.00,
                false,
                '../midia/img/foto_002.jpeg'
            ]
        ];

        class carrinho {
            private $usuario;
            public $carrinho_ini = [];

            public function __construct($usuario){
                $this->usuario = $usuario;
            }

            public function adicionar_produto($id,$nome_prod,$preco,$desconto,$caminho,){
                $produto = [
                    $id,
                    $nome_prod,
                    $preco,
                    $desconto,
                    $caminho,
                ];

                array_push($carrinho_ini, $produto);
            }

            public function remover_produto(){}

            /*public function total_carrinho(){
                for ($i=0;$i >= $carrinho;$i++){

                }*/
            };

        };

        echo "<div class='resposta'><p>";
        echo $carrinho[2][0];
        echo "</p></div>";

    ?>
</body>
</html>