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
    <form action="ex37.php" method="post"><?php
      for ($count = 0; $count < 4; $count ++)
        { ?>
        <label for="valor">Insira o valor</label>
        <input type="number" name="memoria[]" id="memoria"><?php
        } ?>
      <input type="submit" value="Enviar">
    </form>
  </main>
  <section><?php
    $memoria = (array)$_POST['memoria'];
    $soma = 0;
    foreach ($memoria as $chave => $valor)
      {
      $soma += $valor;
      } 
      echo "A média dos valores inseridos é ".($soma / 4)."<br>";
      echo "Maior valor inserido foi: ".max($memoria)." <br>
            E o menor valor inserido foi: ".min($memoria);
    ?>
  </section>
</body>
</html>