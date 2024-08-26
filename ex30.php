<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estruturas de repetição</title>
</head>

<!-- Versão do exercício anterior utilizando o FOR -->

<body>
  <main>                                           
    <form action="ex30.php" method="post">Identificando Números<?php
      for ($count_A = 1; $count_A <= 5; $count_A++)
        { ?>
        <label for="numero<?=$count_A?>">Insira um número</label>
        <input type="number" name="numero<?=$count_A?>" id="numero<?=$count_A?>"> <?php
        } ?>
      <input type="submit" value="Enviar">
    </form>

    <p class="navega">
      <a href="../Cursophp/ex31.php">Avançar</a>
      <a href="../Cursophp/ex29.php">Retornar</a><br>
      <a href="../Cursophp/">Index</a>
    </p>

  </main> <?php 
  
  if (isset($_POST["numero1"])) 
  //condição utilizada para não exibir erro enquanto não for enviado nada ao servidor
    {
    $quantidade_impar = 0;
    $quantidade_par = 0;

    for ($count_B = 1; $count_B <= 5; $count_B++)
      {
      $numero = $_POST["numero" . $count_B]?:0;
      if ($numero % 2 ==0)
        {
        $quantidade_par++; 
        }
      else 
        {
        $quantidade_impar++;
        }
      }
  echo "<article>Quantidade de números pares: $quantidade_par<br> 
        Quantidade de números ímpares: $quantidade_impar
        </article>";
    }
  ?>

    
</body>
</html>