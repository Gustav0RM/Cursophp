<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>12 Formulário retroalimentado</title>
</head>
<body>
    <main>
        <form action="ex12.php" method="post">Soma
            <label for="valor1">Insira o primeiro valor</label>
            <input type="number" name="valor1" id="idvalor1" step="0.01">
            <label for="valor2">Insira o segundo valor</label>
            <input type="number" name="valor2" id="idvalor2" step="0.01">
            <input type="submit" value="Calcular">
        </form>
        <?php
        $variavel1= $_POST["valor1"]?:0; 
        $variavel2= $_POST["valor2"]?:0; 
        $soma = $variavel1 + $variavel2;
        $formato = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo   "<p>a soma entre os números é ". numfmt_format_currency($formato, $soma, "BRL") . "</p>"


        ?>
    </main>
</body>
</html>