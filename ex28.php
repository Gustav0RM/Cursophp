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

    <form action="ex28.php" method="post">Escolha um número para gerar a tabuada dele
      <label for="fator1">Informe o número</label>
      <input type="number" name="fator1" id="fator1" min="1">
      <input type="submit" value="Gerar">
    </form>

    <p class="navega">
      <a href="../Cursophp/ex29.php">Avançar</a>
      <a href="../Cursophp/ex27.php">Retornar</a><br>
      <a href="../Cursophp/">Index</a>

    </p>

  </main>

  <article> <?php

  $fator1 = $_POST["fator1"] ?: 0;
  $fator2 = 0;
  $produto = 0;

  while ($fator2 < 11) 
    {
    $produto = $fator1 * $fator2;
    echo
    "<table>
        <tr>
          <td>$fator1 x $fator2 = $produto</td>
        </tr>
    </table>";
    $fator2++;
    }
    ?>

  </article>

</body>

</html>