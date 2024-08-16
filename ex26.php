<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estruturas de repetição</title>
</head>
<body>

<main>

<form action="ex26.php" method="post">Números ímpares até determinado número
 <label for="nummax">Insira um número inteiro</label>
 <input type="number" name="nummax" id="nummax">
 <input type="submit" value="Verificar">
</form>

<p class="navega">
 <a href="../Cursophp/ex27.php">Avançar</a>
 <a href="../Cursophp/ex25.php">Retornar</a><br>
 <a href="../Cursophp/">Index</a>

</p>

</main>

<article>

<?php 

$count = 1;
$nummax = $_POST["nummax"]? : 0;
$quantidade = intdiv($nummax, 2); 
$soma = 0;

if($nummax >= 1)
{
  echo "<strong>Números Ímpares : </strong>";
 while($count <= $nummax)
{
 echo $count. "\n"; 
 $soma += $count; //soma dos números ímpares $soma = $soma + $count 
 $count+=2;
}
 echo "<br>";
 echo "<br><strong>Quantidade de números ímpares :</strong> $quantidade <br>";
 echo "<br><strong>Soma dos números ímpares :</strong> $soma";
}
else
{
 echo "Insira um valor válido";
}

?>

</article>
    
</body>
</html>