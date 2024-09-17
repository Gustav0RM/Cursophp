<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>ARRAY</title>
</head>
<body>
  <main>
    <form action="ex36.php" method="post"><?php
    for ($count = 0; $count < 4 ; $count++)
      {?>
      <label for="nome">Nome</label>
      <input type="text" name="memoria[]" id="nome">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" name="memoria[]" id="sobrenome">
      <label for="idade">Idade</label>
      <input type="number" name="memoria[]" id="idade"><hr> <?php 
      }?>
      <input type="submit" value="Enviar">
    </form>
  </main>

  <article><?php
        $memoria = $_POST['memoria'];
        foreach ($memoria as $id => $conteudo)
          {
          echo "<table>
                <td>$conteudo</td>
                </table>";
          }?>
  </article>
    

  
</body>
</html>