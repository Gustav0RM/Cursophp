<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Estruturas condicionais</title>
</head>
<body>
    <main>
        <form action="ex20.php" method="post">O número é impar ou par?
            <label for="num">Insira o numero</label>
            <input type="number" name="num" id="idnum">
            <input type="submit" value="Descobrir">
        </form>

        <p class="navega">
            <a href="../Cursophp/ex21.php">Avançar</a>
            <a href="../Cursophp/ex19.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>

    </main>
    <article>
    <?php
        $num = $_POST["num"]?:0;
        date_default_timezone_set("America/Sao_Paulo");
        
        if($num % 2 == 0){
            echo "<p>O número $num é par</p>";
        }
        else{
            echo "<p>O número $num é impar</p>";
        }
        ?>
    </article>
    <footer>
        <?php
        if(date("G")< 12 && date("G")>5){
            echo "São ".date("G:i")."  da manhã";
        }
        else if(date("G")> 12 && date("G")< 18){
            echo "São ".date("G:i")."  da tarde";
        }
        else{
            echo "São ".date("G:i")."  da noite";
        } 
        ?>
    </footer>
    
</body>
</html>