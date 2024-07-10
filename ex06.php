<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 Operações</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h2>Operação x ** 2 + y / z</h2>
        <form action="ex06.php" method="post">
            <label for="num1">Valor de X</label>
            <input type="number" name="num1" id="idnum1">
            <label for="num2">Valor de Y</label>
            <input type="number" name="num2" id="idnum2">
            <label for="num3">Valor de Z</label>
            <input type="number" name="num3" id="idnum3">
            <input type="submit" value="Calcular">
        </form>

    <p style="text-align: center;">
        <?php
        //? e : como if e else para inserir um valor de retorno se condição antes do ? for verdadeira, mantém o que foi inserido, se não : retorna 1 para não exibir erro no php 

        $num1 = $_POST ["num1"] ?:1;
        $num2 = $_POST ["num2"] ?:1;
        $num3 = $_POST ["num3"] ?:1;

        $operação = $num1 ** 2 + $num2 / $num3;
        $resultado1 = $num1 ** 2;
        $resultado2 = $num2 / $num3;
        $resultado3 = $num1 + $resultado2;
 

        echo " Valores: X = $num1,  Y = $num2 e Z = $num3<hr>";
        echo "Resolução<br>
            $num1 ** 2 = $resultado1 <br>
            $num2 / $num3 = $resultado2 <br>
            $resultado1 + $resultado2 = $operação"
    
        
        ?>
    </p>
    <p class="navega">
        <a href="../Cursophp/ex07.php">Avançar</a>
        <a href="../Cursophp/ex05.html">Retornar</a><br>
            <a href="../Cursophp/">Index</a>
    </p>
</section>
    
</body>
</html>