<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>05 info Cadastro</title>
</head>
<body>
    <head>
        <h1>Resultado do processamento</h1>
    </head>

    <main>
        <?php
        $nome = $_POST["nome"] ?: "sem nome";                      
        $sobrenome = $_POST["sobrenome"] ?: "desconhecido";       
        echo "<p>É um prazer te conhcer, $nome $sobrenome";  
              /* ? : funciona como if else, CONDIÇÃO ? VALOR 1 : VALOR 2. Se CONDIÇÃO for verdadeiro, neste caso, 
              se for preenchido, retorna o que foi preenchido, se não, retorna a string após os dois pontos.*/
        ?>
    <p class="navega">
        <a href="../Cursophp/ex06.php">Avançar</a>
        <a href="../Cursophp/ex05.html">Retornar</a><br>
            <a href="../Cursophp/">Index</a>
    </p>
    </main>
    
</body>
</html>