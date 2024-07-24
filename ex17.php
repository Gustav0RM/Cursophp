<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        <title>17 Reajuste percentual</title>
</head>
<body>
    
    <main>
        <form action="ex17.php" method="post">
            <h1>Reajuste</h1>
            <label for="preço">Preço do produto</label>
            <input type="number" name="preço" id="preço" step="0.01">
            <label for="percentual">Insira o percentual do reajuste: <span id="display">0%</span></label> 

            <!-- javascript para visualizar a porcentagem selecionada no range  !-->
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" value="0" oninput="display.innerHTML=value+'%'" onchange="display.innerHTML=value+'%'">
            <input type="submit" value="Enviar">
        </form>

        <?php
            $preço = $_POST["preço"]? : 0;
            $porcentagem = $_POST["porcentagem"]? : 0;
            $valorporcentagem = $porcentagem / 100 * $preço;
            $reajuste = $preço + $valorporcentagem;
            $formatação = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        ?>

        <p class="navega">
            <a href="../Cursophp/ex18.php">Avançar</a>
            <a href="../Cursophp/ex16.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>


    </main> 
    <article>
            <h2>Resultado do reajuste</h2>
            <?php
             echo "O produto que custava ".numfmt_format_currency($formatação, $preço, "BRL")." com aumento de $porcentagem% vai passar a custar ".numfmt_format_currency($formatação, $reajuste, "BRL");
            ?>

    </article>
    
</body>
</html>