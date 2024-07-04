<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>info Cadastro</title>
</head>
<body>
    <head>
        <h1>Resultado do processamento</h1>
    </head>

    <main>
        <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        echo "<p>É um prazer te conhcer, $nome $sobrenome";
        ?>
    <p class="navega">
        <a href="../Cursophp/ex06.php">Avançar</a>
        <a href="../Cursophp/ex05.php">Retornar</a>

    </p>
    </main>
    
</body>
</html>