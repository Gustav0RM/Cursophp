<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Array</title>
</head>
<body>
  <main>
    <div class="row m-0">
      <form action="ex38.php" method="post" >Notas 
        <div class="row m-0"><?php
          for ($count = 0; $count < 3; $count++)
            { ?>
            <div class="col-sm-4">
              <label for="nome">Nome do aluno</label>
              <input type="text" name="nome[]" id="nome">
              <label for="nota">Ciencias</label>
              <input type="number" name="nota[]" id="nota">
              <label for="nota">Matemática</label>
              <input type="number" name="nota[]" id="nota">
              <label for="nota">História</label>
              <input type="number" name="nota[]" id="nota">
            </div><?php
            } ?>
            <input type="submit" value="Enviar">
        </div>
      </form>
    </div>
  </main> <?php 
  if (isset($_POST["nome"],$_POST["nota"]))
    {
    $_SESSION["matriz"] = [$nome_aluno = (array)$_POST["nome"], $nota_aluno = (array)$_POST["nota"]];
    foreach ($_SESSION["matriz"])
      {
      echo "<section></section>";
      }
    } ?>












<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>