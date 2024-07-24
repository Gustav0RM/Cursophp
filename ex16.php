<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>16 Salários</title>
</head>

<body>
    <?php
    $salario = $_POST["salario"] ?: 0;
    $salariominimo = 1412;
    //int div para divisões inteiras
    $calculo = intdiv($salario,  $salariominimo);
    $sobra = ($salario * 100) % ($salariominimo * 100) /100; //cálculo para dar exibir os centavos
    $formataçao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>

        <form action="ex16.php" method="post">   
            <h1>Informe seu salário</h1>
            <Label>Salário</Label>
            <input type="number" name="salario" id="salario" min="1412" step="0.01">

            <?php 
            echo "Considerando um salário mínimo de <strong>" . numfmt_format_currency($formataçao, $salariominimo, "BRL") . "</strong>";
             ?>

            <input type="submit" value="Calcular">
        </form>

        <p class="navega">
            <a href="../Cursophp/ex17.php">Avançar</a>
            <a href="../Cursophp/ex15.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>

    </main>

    <article>

            <h2>Resultado final</h2>

            <?php 
            echo "Quem recebe um salário de " . numfmt_format_currency($formataçao, $salario, "BRL") . " <strong>ganha $calculo salários mínimos</strong> + " . numfmt_format_currency($formataçao, $sobra, "BRL");
            ?>

        </article>

</body>

</html>