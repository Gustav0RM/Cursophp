<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>12 Formulário retroalimentado</title>
</head>

<body>
    <?php
    $variavel1 = $_POST["valor1"]?: 0;
    $variavel2 = $_POST["valor2"]?: 0;
    $soma = $variavel1 + $variavel2;
    $formato = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    ?>
    <main>
        <form action="ex12.php" method="post">Soma
            <label for="valor1">Insira o primeiro valor</label>
            <input type="number" name="valor1" id="idvalor1" step="0.01" value="0">
            <label for="valor2">Insira o segundo valor</label>
            <input type="number" name="valor2" id="idvalor2" step="0.01" value="0">
            <input type="submit" value="Calcular">
            <p>
                <?php
                echo   "A soma entre os números é " . numfmt_format_currency($formato, $soma, "BRL")
                ?>
            </p>
        </form>
        <p class="navega">
            <a href="../Cursophp/ex13.php">Avançar</a>
            <a href="../Cursophp/ex11.html">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
    </main>
</body>

</html>