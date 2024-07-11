<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>10 Resultado</title>
</head>

<body>
    <main>
        <?php
        $num = $_GET["num"];

        // método para pegar só a parte inteira de um número
        $inteiro = (int) $num;
        
        $fracionado = $num - $inteiro;

        echo "<ul>
        <li>O número inserido é ".number_format($num, 3,",",".")."</li>
        <li>A parte inteira é $inteiro</li>
        <li>E a parte fracionada é ".number_format($fracionado, 3, ",", ".")."</li></ul>";

        ?>
        <p class="navega">
            <a href="../Cursophp/ex11.html">Avançar</a>
            <a href="../Cursophp/ex10.html">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
    </main>

</body>

</html>