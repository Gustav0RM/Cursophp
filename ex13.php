<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>13 Raizes</title>
</head>

<body>
    <main>
        <form action="ex13.php" method="post">
            <h1>Informe um número</h1>
            <label for="num1">Numero</label>
            <input type="number" name="num1" id="num1" step="0.1" value="0">
            <input type="submit" value="Verificar">
        </form>
        <?php
        $num1 = $_POST["num1"] ?: 0;
        //sqrt é utilizado para obter a raiz quadrada de um determinado numero 
        $raiz2 = sqrt($_POST["num1"]);
        //pow é a expressão exponencial, pow = (número ** , quantidades de vezes a ser elevado)
        $raiz3 = pow($_POST["num1"], (1 / 3));
        $formato = numfmt_create("pt_BR", NumberFormatter::DECIMAL);
        ?>
        <p class="navega">
            <a href="../Cursophp/ex14.php">Avançar</a>
            <a href="../Cursophp/ex12.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
    </main>
    <article>
        <?php
        echo "<ul><h2>Informações</h2>
            <li>Número inserido: " . numfmt_format($formato, $num1) . "</li>
            <li>Raiz quadrada: " . numfmt_format($formato, $raiz2) . "</li>
            <li>Raiz cúbica: " . numfmt_format($formato, $raiz3) . "</li>
        </ul>"

        ?>
    </article>

</body>

</html>