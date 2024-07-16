<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>08 Gerador de numeros</title>
</head>

<body>
    <section>
        <form action="ex08.php" method="post">Advinhe o número
            <label for="chute">Insira um número de 1 a 10</label>
            <input type="number" name="chute" id="idchute" value="0">
            <input type="submit" value="Enviar">
        </form>

        <?php
        
        //gerador de número aleatório
        $_numero = mt_rand(1, 10);
        $chute = $_POST["chute"]?? 0;

        if ($chute == $_numero)
            echo "Parabéns, você acertou, o número era $_numero";
        else if (empty($chute))
            echo "Insira um número";
        else if ($chute > $_numero)
            echo "Errou, o número é menor";
        else if ($chute < $_numero)
            echo "Errou, o número é maior";

        ?>


        <p class="navega">
            <a href="../Cursophp/ex09.html">Avançar</a>
            <a href="../Cursophp/ex07.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
    </section>

</body>

</html>