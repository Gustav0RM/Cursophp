<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>19 Calculadora de tempo</title>
</head>
<body>
    <main>
        <form action="ex19.php" method="post">
            <label for="segundos">Insira a quantidade de segundos</label>
            <input type="number" name="segundos" id="segundos">
            <input type="submit" value="Calcular">
        </form> 

        <p class="navega">
            <a href="../Cursophp/ex20.php">Avançar</a>
            <a href="../Cursophp/ex18.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>

    </main>
    <?php 
        $segundos = $_POST["segundos"]? : 0;
        $calcsegundos = $segundos / 60;
        $qtdsegundos = $segundos % 60;
        $calcminutos = $calcsegundos / 60;
        $qtdminutos = $calcsegundos % 60;
        $calchoras = $calcminutos / 24;
        $qtdhoras = $calcminutos % 24;
        $calcdias = $calchoras / 7;
        $qtddias = $calchoras % 7;
        $qtdsemanas = (int) $calcdias;

    ?>
    <article>
        <h2>Totalizando tudo</h2>
        <?php 
            echo "Analisando o valor inserido, <strong>".number_format($segundos, 0, "," , "."). " segundos,</strong> equivalem a um total de:
                  <ul>
                    <li>$qtdsemanas semanas</li>
                    <li>$qtddias dias</li>
                    <li>$qtdhoras horas</li>
                    <li>$qtdminutos minutos</li>
                    <li>$qtdsegundos segundos</li>
                  </ul>"
        ?>
    </article>
</body>
</html>