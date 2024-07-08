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
            <input type="text" name="chute" id="idchute">
            <input type="submit" value="Enviar">
        </form>




        <?php
        $_numero = rand(1, 10);
        $chute = $_POST["chute"];

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
            <a href="../Cursophp/ex09.php">Avançar</a>
            <a href="../Cursophp/ex07.php">Retornar</a>

        </p>
    </section>

</body>

</html>