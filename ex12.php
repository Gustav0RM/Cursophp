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
        <form action="<?php echo $_SERVER=['PHP_SELF']?>" method="get">Soma
            <label for="valor1">Insira o primeiro valor</label>
            <input type="number" name="valor1" id="idvalor1">
            <label for="valor2">Insira o segundo valor</label>
            <input type="number" name="valor2" id="idvalor2">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>