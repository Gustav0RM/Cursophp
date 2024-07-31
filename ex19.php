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

        //Cálculo utilizado pelo professor
        $calcsemanas = intdiv($segundos, 604800);
        $sobrasemanas = $segundos % 604800;
        $calcdias = intdiv($sobrasemanas, 86400);
        $sobradias = $sobrasemanas % 86400;
        $calchoras = intdiv($sobradias, 3600);
        $sobrahoras = $sobradias % 3600;
        $calcminutos = intdiv($sobrahoras, 60);
        $sobrasegundos = $sobrahoras % 60;

        // Cálculo utilizado por mim
        // $calcsegundos = $segundos / 60;
        // $qtdsegundos = $segundos % 60;
        // $calcminutos = $calcsegundos / 60;
        // $qtdminutos = $calcsegundos % 60;
        // $calchoras = $calcminutos / 24;
        // $qtdhoras = $calcminutos % 24;
        // $calcdias = $calchoras / 7;
        // $qtddias = $calchoras % 7;
        // $qtdsemanas = (int) $calcdias;

    ?>
    <article>
        <h2>Totalizando tudo</h2>
        <?php 
            echo "Analisando o valor inserido, <strong>".number_format($segundos, 0, "," , "."). " segundos,</strong> equivalem a um total de:
                  <ul>
                    <li>$calcsemanas semanas</li>
                    <li>$calcdias dias</li>
                    <li>$calchoras horas</li>
                    <li>$calcminutos minutos</li>
                    <li>$sobrasegundos segundos</li>
                  </ul>"
        ?>
    </article>
</body>
</html>