<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Array</title>
</head>
<body>
  <main>
    <form action="ex35.php" method="post"><?php 
      for ($count = 1; $count <= 5; $count++)
        { ?>
        <label for="dado<?=$count?>">Insira o dado <?=$count?></label>
        <input type="number" name="dado[<?=$count?>]" id="dado<?=$count?>"><?php
        } ?>
      <input type="submit" value="Verificar">
    </form>
    <p class="navega">
      <a href="../Cursophp/ex36.php">Avançar</a>
      <a href="../Cursophp/ex34.php">Retornar</a><br>
      <a href="../Cursophp/">Index</a>
    </p>
  </main> <?php
  if(isset($_POST["dado"]));
  {
  $array = $_POST['dado'];
  foreach ($array as $chave => $valor)
    {
    echo "<article>chave $chave e valor $valor</article>";
    }
  }
    ?>
    
 
</body>
</html>