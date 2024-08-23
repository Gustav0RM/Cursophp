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
    <form action="ex29.php" method="post">Identificando números <?php
      while ($count_2 < 5)
        {
        $count_2++; ?>
        <label for="num<?=$count_2?>">Insira um número</label>
        <input type="number" name="num<?=$count_2?>" id="num<?$count_2?>"> <?php
        } ?>
      <input type="submit" value="Verificar">
    </form>
    <p class="navega">
      <a href="../Cursophp/ex30.php">Avançar</a>
      <a href="../Cursophp/ex28.php">Retornar</a><br>
      <a href="../Cursophp/">Index</a>

    </p>
  </main> <?php

  if (isset($_POST["num1"]))
    {
    $quantidade_impar = 0;
    $quantidade_par = 0;
    $count = 1;

    while ($count <= 5)
      {
      $num = $_POST["num" . $count] ?:0;

      if ($num % 2 != 0)
        {
        $quantidade_impar++;
        }
      else
        {
        $quantidade_par++;
        }
      $count++;
      }

    echo "<article>Quantidade de número par: $quantidade_par <br> Quantidade de número ímpar: $quantidade_impar</article>";
    } ?>

</body>
</html>