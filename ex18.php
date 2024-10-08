<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>18 Caixa eletrônico</title>
</head>
<body>

    <main>
        <form action="ex18.php" method="post">Caixa Eletrônico
            <label for="valor">Qual valor você deseja sacar</label>
            <input type="number" name="valor" id="valor" step="5">
            <aside>* Notas de 100, 50, 10 e 5 *</aside>
            <input type="submit" value="Sacar">
        </form>

        <p class="navega">
            <a href="../Cursophp/ex19.php">Avançar</a>
            <a href="../Cursophp/ex17.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>

    </main>

    <?php
        $formatação = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $valor = $_POST["valor"]? : 0;

        $qtdnotacem = intdiv($valor, 100);
        $sobracem = $valor % 100;
        //-----------------------------
        $qtdnotacinq = intdiv($sobracem, 50);
        $sobracinq = $sobracem % 50;
        //-----------------------------
        $qtdnotadez = intdiv($sobracinq, 10);
        $sobradez = $sobracinq % 10;
        //-----------------------------
        $qtdnotacinco = intdiv($sobradez, 5);


    ?>

    <article>
        <?php 
            echo "<h2>Saque de ".numfmt_format_currency($formatação, $valor, "BRL") ." realizado</h2><br>
                  <p>O caixa eletrônico vai te entregar as seguintes notas</p><br>
                  <ul>
                      <li>Nota de 100: " .$qtdnotacem. "x</li>
                      <li>Nota de 50: ". $qtdnotacinq. "x</li>
                      <li>Nota de 10: ". $qtdnotadez. "x </li>
                      <li>Nota de 5: " .$qtdnotacinco. "x</li>
                  </ul>";
        ?>
    </article>
    
</body>
</html>