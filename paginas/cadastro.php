<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../midia/img/logo-desenho.png" type="image/x-icon">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="../estilos/cadastro.css">
</head>
<body id="bodi">

<!--?php 
    session_start();

    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if($nome != ""){
        $_SESSION["nome"] = $nome;
        echo $_SESSION["nome"];
    }
    if($email != ""){
        $_SESSION["email"] = $email;
    }
    if($senha != ""){
        $_SESSION["senha"] = $senha;
    }
?!-->

    <div class="imagem_bonita" id="botao_vai_aqui">
        <main>
            <div class="balao_cadastro">
                <div class="contem_form">
                    <form action="<?$_SERVER['PHP_SELF']?>" method="post">
                        <div class="sessao_cadastro">
                            <div class="contem_label">
                                <label for="nome">nome</label>
                            </div>
                            <input type="text" name="nome" id="nomeid">
                        </div>
                        <div class="sessao_cadastro">
                            <div class="contem_label">
                                <label for="email">email</label>
                            </div>
                            <div class="email">
                                <input type="email" name="email" id="emailid">
                            </div>
                        </div>
                        <div class="sessao_cadastro">
                            <div class="contem_label">
                                <label for="senha">senha</label>
                            </div>
                            <div class="senha">
                                <input type="password" name="senha" id="senhaid">
                            </div>
                        </div>
                        <div class="contem_button">
                            <input type="submit" value="cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script src="../interacao/voltar.js"></script>
</body>
</html>