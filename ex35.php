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
        <input type="number" name="dado<?=$count?>" id="dado<?=$count?>"><?php
        } ?>
      <input type="submit" value="Verificar">
    </form>
  </main>
  <article><?php

    $array = array($dado1 = $_POST["dado1"],$dado2 = $_POST["dado2"],$dado3 = $_POST["dado3"],$dado4 = $_POST["dado4"],$dado5 = $_POST["dado5"]);
    var_dump($array);
    ?>
    
  </article>
</body>
</html>