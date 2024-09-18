<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>ARRAY</title>
</head>

<body>
  <main>
    <form action="ex36.php" method="post">
      <div class="row m-0"><?php
        for ($count = 0; $count < 3; $count++)
          {?>
          <div class="col-sm-4">
            <label for="nome">Nome</label>
            <input type="text" name="dados[]" id="nome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="dados[]" id="sobrenome">
            <label for="idade">Idade</label>
            <input type="number" name="dados[]" id="idade">
          </div> <?php
          }?>
      <input type="submit" value="Enviar">
      </div><!--final da linha -->
    </form>
    <p class="navega">
      <a href="../Cursophp/ex37.php">Avançar</a>
      <a href="../Cursophp/ex35.php">Retornar</a><br>
      <a href="../Cursophp/">Index</a>
    </p>
  </main> 

  <article>
    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Idade</th>
        </tr>
      </thead>
      <tbody> <?php

        if (isset ($_POST["dados"]));
          {
          $array_memoria = (array) $_POST['dados'];
          // Dividimos o array em grupos de 3, cada grupo com 1 nome, 1 sobrenome e 1 idade
          $grupos = array_chunk($array_memoria, 3);
          foreach ($grupos as $grupo) 
            {
            echo "<tr>";
            foreach ($grupo as $valor) 
              {
              echo "<td>$valor</td>";
              }
            echo "</tr>";
            }
          }?>
      </tbody>
    </table>
  </article>
    




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>