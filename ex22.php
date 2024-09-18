<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Switch</title>
</head>

<body>
    <main>
        <form action="ex22.php" method="post">Calculos
            <label for="valor1">Insira o primeiro número</label>
            <input type="number" name="valor1" id="valor1">
            <label for="valor2">Insira o segundo número</label>
            <input type="number" name="valor2" id="valor2">
            <label for="valor3">Insira o terceiro número</label>
            <input type="number" name="valor3" id="valor3">
            <label for="operações">Operação</label>

            <select name="opções" id="opções">
                <option value="1" selected hidden>--Selecione--</option>
                <option value="2">Soma</option>
                <option value="3">Subtração</option>
                <option value="4">Divisão</option>
                <option value="5">Multiplicação</option>
            </select>
            <input type="submit" value="Calcular">
        </form>
        <p class="navega">
            <a href="../Cursophp/ex23.php">Avançar</a>
            <a href="../Cursophp/ex21.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
    </main>

    <?php
    $valor1 = $_POST["valor1"] ?: 0;
    $valor2 = $_POST["valor2"] ?: 0;
    $valor3 = $_POST["valor3"] ?: 0;
    $opções = $_POST["opções"];
  
        switch ($opções) {
            case 1:
                echo "<article>
                        <p>Selecione uma operação</p>
                      </article>";
                break;
            case 2:
                echo "<article>
                        <p>A soma é: " . $valor1 + $valor2 + $valor3 . "</p>
                      </article>";
                break;
            case 3:
                echo "<article>
                        <p>A subtração é: " . $valor1 - $valor2 - $valor3 . "</p>
                      </article>";
                break;
            case 4:
                echo "<article>
                        <p>A divisão é: " . $valor1 / $valor2 / $valor3 . "</p>
                      </article>";
                break;
            case 5:
                echo "<article>
                        <p>A multiplicação é: " . $valor1 * $valor2 * $valor3 . "</p>
                     </article>";
        }
        ?>
</body>

</html>