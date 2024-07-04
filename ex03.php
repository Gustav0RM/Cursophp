<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Variáveis e constantes</title>
</head>

<body>
    <main>
        <?php
        $nome = "gustavo";
        $sobrenome = "roube";
        $idade = 22;
        $peso = 58.60;
        const PAIS = "Brasil";
        const CURSO = "ADS";
        echo "Muito prazer, $nome $sobrenome Você mora no "  . PAIS.
        " tem  $idade   anos de idade, pesa  $peso  Kg e cursa   " .CURSO;
        ?>
        <p class="navega">
            <a href="../Cursophp/ex04.php">Avançar</a>
            <a href="../Cursophp/ex02.php">Retornar</a>
        </p>
    </main>
</body>

</html>