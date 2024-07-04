<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Obtendo dados de Formulários</title>
</head>

<body>
    <header>
        <h1>Apresente-se</h1>
    </header>

        <section>
            <form action="ex05cad.php" method="get">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="idnome">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="idsobrenome">
                <input type="submit" value="Enviar">
            </form>
            <p class="navega">
            <a href="../Cursophp/ex04.php">Retornar</a>
        </p>
        </section>
 

</body>

</html>