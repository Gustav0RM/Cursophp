<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>02 Data</title>
</head>

<body>
    <main>
        <h1>Exemplo de configuração de horário</h1>
        <?php
        
        //formatação para exibir horário
        date_default_timezone_set("America/Sao_Paulo");
        echo "hoje é dia " . date("d/M/Y");
        echo "<br> e são " . date("G:i:s");
        ?>

        <p class="navega">
            <a href="../Cursophp/ex03.php">Avançar</a>
            <a href="../Cursophp/ex01.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>
        </p>
    </main>
</body>

</html>