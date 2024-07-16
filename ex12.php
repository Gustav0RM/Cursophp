<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>12 Estrutura da divisão</title>
</head>

<body>
    <main>

        <form action="ex12.php" method="post">Anatomia de divisão
            <label for="num1">Insira o numero</label>
            <input type="number" name="num1" id="num1" step="0.01">
            <label for="num2">Insira o divisor</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Analisar">
        </form>

        <?php
        
        $num1 = $_POST["num1"] ?: 0;
        $divisor = $_POST["divisor"] ?: 1;
        $quociente = $num1 / $divisor;
        $resto = $num1 % $divisor;

        //formatador para exibir as casas decimais conforme forem inseridas, e caso não sejam inseridas, não aparecerem. E trocar local do . por , 
        $formato = numfmt_create("pt_BR", NumberFormatter::TYPE_DEFAULT);

        echo "<p>o número " . numfmt_format($formato, $num1) . " dividido por $divisor, dá " . numfmt_format($formato, $quociente) . " e sobra $resto"

        ?>

        <p class="navega">
            <a href="../Cursophp/ex13.php">Avançar</a>
            <a href="../Cursophp/ex11.html">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>

    </main>


</body>

</html>