<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Array</title>
  <style>
    a 
      {
      color: #15142b;
      background-color: rgba(55, 41, 145, 0.1);
      padding: 0 3px;
      font-weight: 600;
      text-decoration: none;
      border-bottom: .5px dotted #372991;
      }
    a:hover 
      {
      color: #867faf;
      border-bottom: 1px solid #372991;
      }
  </style>
</head>

   <!-- Manipulação de Arrays:
Crie um array com alguns números inteiros. Em seguida, escreva código para:
* - Calcular a média dos valores.
* - Encontrar o maior e o menor valor.
* - Verificar se um número específico está presente no array. -->
<?php 
session_start();//utilizando a session para preservar dados de um formulário, para que quando outro seja enviado ele consulte estes dados
?>
<body>
  <main>
    <div class="row m-0">
      <div class="col-sm-6">
        <form action="ex37.php" method="post"><?php
          for ($count = 0; $count < 4; $count ++)
            { ?>
            <label for="valor">Insira o valor</label>
            <input type="number" name="memoria[]" id="memoria"><?php
            } ?>
          <input type="submit" name="array" value="Enviar">
        </form><?php
        if (isset($_POST["memoria"]))
          {
          $_SESSION["memoria"] = (array)$_POST["memoria"]; // salvando dados do formulário no array e salvando o array na session
          }
        if (isset($_SESSION["memoria"]))
          {
          echo "A média dos valores inseridos é ".(array_sum($_SESSION["memoria"]) / 4)."<br>Maior valor inserido foi: ".max((array) $_SESSION["memoria"])." <br> Menor valor inserido foi: ".min((array) $_SESSION["memoria"])."<br>";
          }  ?>
      </div>
      <div class="col-sm-6">
        <form action="ex37.php" method="post">Verificar se determinado número existe no array
          <label for="numero">Insira o número</label>
          <input type="number" name="numero" id="numero">
          <input type="submit" name="busca" value="Verificar">
        </form> <?php
        if (isset($_POST["numero"]))
          {
          $memoria = $_SESSION["memoria"]; //recuperar o valor armazenado na sessão
          $numero = $_POST["numero"];
          if (in_array($numero,$memoria))
            {
            echo "O número pesquisado($numero), consta no array.";
            }
          else
            {
            echo "O número não consta no array";
            }
          }
              ?>
      </div>
    </div>
    <p class="navega" style="padding-top:20px;">
      <a href="../Cursophp/ex38.php">Avançar</a>
      <a href="../Cursophp/ex36.php">Retornar</a><br>
      <a href="../Cursophp/">Index</a>
    </p>
  </main>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>