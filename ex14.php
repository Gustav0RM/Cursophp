<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>14 Médias</title>
</head>

<body>
    <main>
        <h1>Médias</h1>
        <form action="ex14.php" method="post">
            <label for="nota1">Insira a nota</label>
            <input type="number" name="nota1" id="nota1" step="0.1">
            <label for="nota1">Insira o peso da primeira nota</label>
            <input type="number" name="peso1" id="peso1">
            <label for="nota2">Insira a segunda nota</label>
            <input type="number" name="nota2" id="nota2" step="0.1">
            <label for="peso2">Insira a peso da segunda nota</label>
            <input type="number" name="peso2" id="peso2">
            <input type="submit" value="Enviar">

        </form>

        <?php
        $nota1 = $_POST["nota1"] ?: 0;
        $nota2 = $_POST["nota2"] ?: 0;
        $peso1 = $_POST["peso1"] ?: 1;
        $peso2 = $_POST["peso2"] ?: 1;
        $mediasimples = ($nota1 + $nota2) / 2;
        $mediaponderada = (($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2);

        ?>

        <p class="navega">
            <a href="../Cursophp/ex15.php">Avançar</a>
            <a href="../Cursophp/ex13.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>

    </main>

    <article>

        <h2>Calculo das médias</h2>
        <?php
        echo "
            <p>Primeira nota: " . number_format($nota1, 1, ",", ".") . " e peso $peso1, segunda nota: " . number_format($nota2, 1, ",", ".") . " e peso $peso2:</p>
            <ul>
                <li>A média aritmética simples é: " . number_format($mediasimples, 1, ",", ".") . "</li><br>
                <li>A média aritmética ponderada é: " . number_format($mediaponderada, 1, ",", ".") . "</li>
            </ul>"
        ?>
        
    </article>

</body>

</html>