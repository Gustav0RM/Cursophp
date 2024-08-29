<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estruturas de repetição</title>
</head>

<!-- A série de Fibonacci é formada pela sequência 0,1,1,2,3,5,8,13,21,34,55,... Faça um programa capaz de gerar a série até o n−ésimo termo. -->

<body>
  <main>
    <form action="ex32.php" method="post">Série de Fibonacci
      <label for="repeticao">Numero de vezes que deve repetir</label>
      <input type="number" name="repeticao" id="repeticao" min="2" max="11">
      <input type="submit" value="Verificar">
    </form>
    <p class="navega">
      <a href="../Cursophp/ex33.php">Avançar</a>
      <a href="../Cursophp/ex31.php">Retornar</a><br>
      <a href="../Cursophp/">Index</a>
    </p> 
  </main> 

  <article> <?php

    if (isset($_POST["repeticao"]))
      {
      $repeticao = $_POST["repeticao"]?:0;
      $penultimo = 0;
      $ultimo = 1;
      echo "0 1 ";
      
      for ($count = 1; $count <= $repeticao - 2; $count++)
        {
        $atual = $penultimo + $ultimo;
        echo $atual . "\n";
        $penultimo = $ultimo;
        $ultimo = $atual;
        }
      }
    else
      {
      echo "Insira um valor";
      } ?>

  </article>
    
</body>
</html>