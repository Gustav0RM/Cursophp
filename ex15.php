<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>15 Idade</title>
</head>

<body>

    <?php
    date_default_timezone_set("America/Sao_Paulo");
    $nascimento = $_POST["nascimento"]? : 0;
    $ano = $_POST["ano"]? : 0;
    $calc = $ano - $nascimento;
    ?>


    <main>
        <form action="ex15.php" method="post">
            <h2>Calculando sua idade</h2>
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" max="<?php echo date("Y");?>">
            <label for="ano">Quer saber sua idade em que ano? Estamos em <?php echo date("Y");?></label>
            <input type="number" name="ano" id="ano">
            <input type="submit" value="Enviar">
        </form>

        <p class="navega">
            <a href="../Cursophp/ex16.php">Avançar</a>
            <a href="../Cursophp/ex14.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
    </main>

    <article>
            <h2>Resultado</h2>
            <p>
                <?php 
                echo "Quem nasceu em $nascimento, vai ter <strong>$calc</strong> anos em $ano"
                ?>
            </p>
        </article>
</body>

</html>