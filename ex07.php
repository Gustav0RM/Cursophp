<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>07 Transformador</title>
</head>

<body>
    <section>
        <form action="ex07.php" method="post">Decimal pra Binário
            <label for="numero">Insira o número</label>
            <input type="number" name="numero" id="idnumero" value="0">
            <input type="submit" value="Transformar">
        </form>

        <?php

        //conversor de base numérica 10=decimal para 2=binário
        $numero = base_convert($_POST["numero"] ??0 , 10, 2);

        echo "<br>Valor em binário: $numero";
        ?>


        <p class="navega">
            <a href="../Cursophp/ex08.php">Avançar</a>
            <a href="../Cursophp/ex06.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>
        </p>
    </section>


</body>

</html>