<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Condicional porcentagem</title>
</head>

<body>
    <main>
        <form action="ex23.php" method="post">Verificar aumento salarial
            <label for="colaborador">Insira o seu nome</label>
            <input type="text" name="colaborador" id="colaborador">
            <label for="salario">Insira o salário</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <input type="submit" value="Verificar">
        </form>
        <p class="navega">
            <a href="../Cursophp/ex24.php">Avançar</a>
            <a href="../Cursophp/ex22.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
    </main>

    <?php
    $colaborador = $_POST["colaborador"] ?: "sem nome";
    $salario = $_POST["salario"] ?: 0;
    $aumento20 = (20 / 100) * $salario;
    $aumento15 = (15 / 100) * $salario;
    $aumento10 = (10 / 100) * $salario;
    $aumento05 = (05 / 100) * $salario;
    $formatação = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>

    <article>
        <?php
        if ($salario <= 1500) {
            echo "<ul>
            <li>Colaborador: $colaborador</li>
            <li>Salário atual " . numfmt_format_currency($formatação, $salario, "BRL") . "</li>
            <li>Reajuste de 20%</li>
            <li>Valor do reajuste " . numfmt_format_currency($formatação, $aumento20, "BRL") . "</li>
            <li>Salário após reajuste " . numfmt_format_currency($formatação, $salario + $aumento20, "BRL") . "</li> 
            </ul>";
        } elseif ($salario > 1500 && $salario <= 2500) {
            echo "<ul>
            <li>Colaborador: $colaborador</li>
            <li>Salário atual " . numfmt_format_currency($formatação, $salario, "BRL") . "</li>
            <li>Reajuste de 15%</li>
            <li>Valor do reajuste " . numfmt_format_currency($formatação, $aumento15, "BRL") . "</li>
            <li>Salário após reajuste " . numfmt_format_currency($formatação, $salario + $aumento15, "BRL") . "</li> 
            </ul>";
        } elseif ($salario > 2500 && $salario <= 3500) {
            echo "<ul>
            <li>Colaborador: $colaborador</li>
            <li>Salário atual " . numfmt_format_currency($formatação, $salario, "BRL") . "</li>
            <li>Reajuste de 10%</li>
            <li>Valor do reajuste " . numfmt_format_currency($formatação, $aumento10, "BRL") . "</li>
            <li>Salário após reajuste " . numfmt_format_currency($formatação, $salario + $aumento10, "BRL") . "</li> 
            </ul>";
        } elseif ($salario > 3500 && $salario <=   4500) {
            echo "<ul>
            <li>Colaborador: $colaborador</li>
            <li>Salário atual " . numfmt_format_currency($formatação, $salario, "BRL") . "</li>
            <li>Reajuste de 5%</li>
            <li>Valor do reajuste " . numfmt_format_currency($formatação, $aumento05, "BRL") . "</li>
            <li>Salário após reajuste " . numfmt_format_currency($formatação, $salario + $aumento05, "BRL") . "</li> 
            </ul>";
        } else {
            echo "<ul>
            <li>Colaborador: $colaborador</li>
            <li>Salário: " . numfmt_format_currency($formatação, $salario, "BRL") . "</li>
            <li>Sem aumento</li>
            </ul>";
        }
        ?>
    </article>
    
</body>

</html>