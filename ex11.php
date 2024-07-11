<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>11 SUPERGLOBAIS</title>
</head>
<body>
    <main>
        <pre>
            <?php
            //o cookie ''dia-da-semana'' está com o valor da data atual *sempre declarar o cookie primeiro*
            setcookie("dia-da-semana", date("D/m/Y"), time() + 3600);
            
            //inicialização da session e inserção de uma variável ''teste''
            session_start();
            $_SESSION["teste"] = "Variavel1";

            //no get é possivel passar variáveis e valores pela URL
            echo "<h1>método get</h1>";
            var_dump($_GET);
            //post retorna os valores inseridos no formulário
            echo "<h1>método post</h1>";
            var_dump($_POST);
            //request puxa os dados do get e do post juntos
            echo "<h1>método request</h1>";
            var_dump($_REQUEST);

            echo "<h1>Superglobal cookie</h1>";
            var_dump($_COOKIE);

            echo "<h1>Superglobal Session</h1>";
            var_dump($_SESSION);

            echo "<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER);
            
            //exibe todas as variáveis
            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS);
            ?>
        </pre>


<p class="navega">
            <a href="../Cursophp/ex12.html">Avançar</a>
            <a href="../Cursophp/ex11.html">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
    </main>
    
</body>
</html>