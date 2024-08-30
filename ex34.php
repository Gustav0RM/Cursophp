<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Estruturas de repetição</title>
</head>

<!-- Alterado o ex33 para ter a saída deve ser conforme o exemplo abaixo:
    Fatorial de: 5
    5! =  5 . 4 . 3 . 2 . 1 = 120 -->

<body>
  <main>
    <form action="ex34.php" method="post">Fatorial
      <label for="inteiro">Insira um numero inteiro</label>
      <input type="number" name="inteiro" id="inteiro">
      <input type="submit" value="Calcular">
    </form>
    <p class="navega">
      <a href="../Cursophp/ex35.php">Avançar</a>
      <a href="../Cursophp/ex33.php">Retornar</a><br>
      <a href="../Cursophp/">Index</a>
    </p> 
  </main> 
  <article> <?php
    
    if (isset($_POST["inteiro"]))
      {
      $inteiro = $_POST["inteiro"]?:0;
      $sucessor = $inteiro;

      if ($inteiro >= 2)
        { 
        echo $inteiro. "!=" .$inteiro;
        for ($count = 1; $count < $sucessor; $count++)
          {
          echo ".".($sucessor - $count);
          $inteiro = $inteiro * ($sucessor - $count);
          }
        echo "=$inteiro";
        }
      elseif ($inteiro == 0) 
        {
        echo "0! = 1";
        }
      else
        {
        echo "1! = 1";
        }
      }
    else
      {
      echo "Insira um número";
      } ?>
  </article>
  
</body>
</html>