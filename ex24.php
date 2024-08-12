<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estruturas condicionais2</title>
</head>
<body>
    <main>
        <form action="ex24.php" method="post">Informações do colaborador
            <label for="hora">Valor da hora de trabalho</label>
            <input type="number" name="hora" id="hora">
            <label for="trabalhada">Horas trabalhadas no mês</label>
            <input type="number" name="trabalhada" id="trabalhada">
            <input type="submit" value="Verificar">
        </form>
        <p class="navega">
            <a href="../Cursophp/ex25.php">Avançar</a>
            <a href="../Cursophp/ex23.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
        <br>
        <article>
            <?php 
    
            $hora = $_POST["hora"]? :0;
            $trabalhada = $_POST["trabalhada"]? :0;
            $salariobruto = $hora * $trabalhada;
            $impostorenda5 = (5 /100) * $salariobruto;
            $impostorenda10 = (10 /100) * $salariobruto;
            $impostorenda20 = (20 /100) * $salariobruto;
            $impostoinss = (10 /100) * $salariobruto;
            $valorfgts = (11 /100) * $salariobruto;
            $formatação = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $salarioliquido5 = $salariobruto - $impostorenda5 - $impostoinss;
            $salarioliquido10 = $salariobruto - $impostorenda10 - $impostoinss;
            $salarioliquido20 = $salariobruto - $impostorenda20 - $impostoinss;
    
            
            
            if($salariobruto <= 900){
                echo "Salário isento de IR
                <ul>
                <li>Salário bruto : ". numfmt_format_currency($formatação, $salariobruto, "BRL")."</li>
                <li>Imposto de renda : Isento</li>
                <li>INSS : ". numfmt_format_currency($formatação, $impostoinss, "BRL"). "</li>
                <li>FGTS : ". numfmt_format_currency($formatação, $valorfgts, "BRL"). " </li>
                <li>Salário liquido : ".numfmt_format_currency($formatação, ($salariobruto - $impostoinss), "BRL") ." </li>
                </ul>";
            }
            elseif($salariobruto <=1500){
                echo "Salário do colaborador
                <ul>
                <li>Salário bruto : ". numfmt_format_currency($formatação, $salariobruto, "BRL")."</li>
                <li>Imposto de renda : ". numfmt_format_currency($formatação, $impostorenda5, "BRL")."</li>
                <li>INSS : ". numfmt_format_currency($formatação, $impostoinss, "BRL")."</li>
                <li>FGTS : ". numfmt_format_currency($formatação, $valorfgts, "BRL")." </li>
                <li>Total de descontos : ". numfmt_format_currency($formatação, ($impostorenda5 + $impostoinss),"BRL"). "</li>
                <li>Salário liquido : ". numfmt_format_currency($formatação,$salarioliquido5,"BRL")." </li>
                </ul>";
            }
            elseif($salariobruto <= 2500){
                echo "Salário do colaborador
                <ul>
                <li>Salário bruto : ". numfmt_format_currency($formatação, $salariobruto, "BRL")."</li>
                <li>Imposto de renda : ". numfmt_format_currency($formatação, $impostorenda10, "BRL")."</li>
                <li>INSS : ". numfmt_format_currency($formatação, $impostoinss, "BRL")."</li>
                <li>FGTS : ". numfmt_format_currency($formatação, $valorfgts, "BRL")." </li>
                <li>Total de descontos : ". numfmt_format_currency($formatação, ($impostorenda10 + $impostoinss),"BRL"). "</li>
                <li>Salário liquido : ". numfmt_format_currency($formatação,$salarioliquido10,"BRL")." </li>
                </ul>";
            }
            else{
                echo "Salário do colaborador
                <ul>
                <li>Salário bruto : ". numfmt_format_currency($formatação, $salariobruto, "BRL")."</li>
                <li>Imposto de renda : ". numfmt_format_currency($formatação, $impostorenda20, "BRL")."</li>
                <li>INSS : ". numfmt_format_currency($formatação, $impostoinss, "BRL")."</li>
                <li>FGTS : ". numfmt_format_currency($formatação, $valorfgts, "BRL")." </li>
                <li>Total de descontos : ". numfmt_format_currency($formatação, ($impostorenda20 + $impostoinss),"BRL"). "</li>
                <li>Salário liquido : ". numfmt_format_currency($formatação,$salarioliquido20,"BRL")." </li>
                </ul>";
            }
            ?>
        </article>
    </main>
   
    
</body>
</html>