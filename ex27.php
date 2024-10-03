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

    <form action="ex27.php" method="post">Números inteiros entre um intervalo de dois números
      <label for="numeromin">Insira o número mínimo</label>
      <input type="number" name="numeromin" id="numeromin">
      <label for="numeromax">Insira o número máximo</label>
      <input type="number" name="numeromax" id="numeromax">
      <input type="submit" value="Verificar">
    </form>

    <p class="navega">
      <a href="../Cursophp/ex28.php">Avançar</a>
      <a href="../Cursophp/ex26.php">Retornar</a><br>
      <a href="../Cursophp/">Index</a>

    </p>

  </main> <?php
  if (isset($_POST["numeromin"]))
    {
      $numeromin = $_POST["numeromin"] ?: 0;
      $numeromax = $_POST["numeromax"] ?: 0;
      $count = $numeromin + 1;
      $soma = 0;
      $quantidade = $numeromax - 2; // quantidade de números no intervalo
    
      if ($numeromin < $numeromax)
        {
        echo "<article>
                <strong>Números do intervalo:</strong> ";
        while ($count < $numeromax) 
          {
          echo $count . "\n"; //numeros no intervalo
          $soma += $count; // soma dos números do intervalo, $soma = $soma + $count 
          $count++;
          }
        echo "<strong>Quantidade de números no intervalo:</strong> " . $quantidade ."<br>
              <strong>Soma entre os números do intervalo:</strong> " . $soma . "</article>";
        } 
      else 
        {
        echo "O número mínimo precisa ser menor que o número máximo";
        } 
    } ?>

</body>

</html>