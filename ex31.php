<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estruturas de repetição</title>
</head>

<!-- Faça um programa que peça dois números, base e expoente, calcule e mostre o primeiro número elevado ao segundo número. Não utilize a função de potência da linguagem. -->

<body>
  <main>
    <form action="ex31.php" method="post">Exponenciação
      <label for="base">Base</label>
      <input type="number" name="base" id="base" min="0">Elevado a
      <label for="expoente">Expoente</label>
      <input type="number" name="expoente" id="expoente" min="0">
      <input type="submit" value="Calcular">
    </form>

    <p class="navega">
      <a href="../Cursophp/ex32.php">Avançar</a>
      <a href="../Cursophp/ex30.php">Retornar</a><br>
      <a href="../Cursophp/">Index</a>
    </p>

  </main> <?php

  if(isset($_POST["base"], $_POST["expoente"]))
    {
    $base = $_POST["base"]?:0;
    $expoente = $_POST["expoente"]?:0;
    $resultado = $base; // variavel criada para poder exibir de forma correta no else abaixo, caso utilizasse base *= base, a exibição não seria correta

    if ($expoente == 0)
      {
      echo "<article>$base elevado a $expoente = 1</article>";
      }
    else
      {
      for ($count_A = 1; $count_A < $expoente; $count_A++)
      {
      $resultado *= $base;
      }
      echo "<article>$base elevado a $expoente = $resultado</article>";
      }
    }
    ?>

</body>
</html>