<?php 

    session_start();

    $nomeFinal = $_SESSION["nome_usuario"] ?? "";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/style/styleValidacao.css">
    <title>Confirmação de cadastro</title>
</head>
<body>
    <main class="container-sucesso">
        <div class="conteudo-sucesso">

            <h1>Cadastro Confirmado, <span class="nomeUsuario"><?=$nomeFinal?></span> !</h1>

            <p>Seus dados foram recebidos com sucesso.</p>

            <p>Vaga garantida para o Bolão do Hexa!</p>

            <a class="botao-voltar " href="index.php">Voltar à página inicial</a>

        </div>
    </main>
</body>
</html>