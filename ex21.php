<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/estilos.css">
    <title>Calculo de media</title>
</head>

<body>
    <main>
        <form action="ex21.php" method="post">
            <div class="row m-0">
                <div class="col-sm-4">
                    Notas em Matemática
                    <label for="nota1mat">Insira sua nota</label>
                    <input type="number" name="nota1mat" id="nota1mat" step="0.1" min="0" max="10">
                    <label for="nota2mat">Insira sua segunda nota</label>
                    <input type="number" name="nota2mat" id="nota2mat" step="0.1" min="0" max="10">
                    <label for="nota3mat">Insira sua terceira nota</label>
                    <input type="number" name="nota3mat" id="nota3mat" step="0.1" min="0" max="10">
                </div>
                <div class="col-sm-4">
                    Notas em Ciência
                    <label for="nota1cie">Insira sua nota</label>
                    <input type="number" name="nota1cie" id="nota1cie" step="0.1" min="0" max="10">
                    <label for="nota2cie">Insira sua segunda nota</label>
                    <input type="number" name="nota2cie" id="nota2cie" step="0.1" min="0" max="10">
                    <label for="nota3cie">Insira sua terceira nota</label>
                    <input type="number" name="nota3cie" id="nota3cie" step="0.1" min="0" max="10">
                </div>
                <div class="col-sm-4">
                    Notas em Artes
                    <label for="nota1art">Insira sua nota</label>
                    <input type="number" name="nota1art" id="nota1art" step="0.1" min="0" max="10">
                    <label for="nota2art">Insira sua segunda nota</label>
                    <input type="number" name="nota2art" id="nota2art" step="0.1" min="0" max="10">
                    <label for="nota3art">Insira sua terceira nota</label>
                    <input type="number" name="nota3art" id="nota3art" step="0.1" min="0" max="10">
                </div>
                <div class="col-sm-12"><input type="submit" value="Verificar"></div>
            </div>
        </form>
        <p class="navega">
            <a href="../Cursophp/ex22.php">Avançar</a>
            <a href="../Cursophp/ex20.php">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
    </main>



    <?php
    $nota1mat = $_POST["nota1mat"] ?: 0;
    $nota2mat = $_POST["nota2mat"] ?: 0;
    $nota3mat = $_POST["nota3mat"] ?: 0;
    //-------------------------------
    $nota1cie = $_POST["nota1cie"] ?: 0;
    $nota2cie = $_POST["nota2cie"] ?: 0;
    $nota3cie = $_POST["nota3cie"] ?: 0;
    //-------------------------------
    $nota1art = $_POST["nota1art"] ?: 0;
    $nota2art = $_POST["nota2art"] ?: 0;
    $nota3art = $_POST["nota3art"] ?: 0;
    //-------------------------------
    $peso1 = 2;
    $peso2 = 2;
    $peso3 = 3;
    $formatação = numfmt_create("pt_BR", NumberFormatter::TYPE_DEFAULT);

    $mediaponderadamat = (($nota1mat * $peso1) + ($nota2mat * $peso2) + ($nota3mat * $peso3)) / ($peso1 + $peso2 + $peso3);
    //-----------------------------------------------------------------------------------------------------
    $mediaponderadacie = (($nota1cie * $peso1) + ($nota2cie * $peso2) + ($nota3cie * $peso3)) / ($peso1 + $peso2 + $peso3);
    //-----------------------------------------------------------------------------------------------------
    $mediaponderadaart = (($nota1art * $peso1) + ($nota2art * $peso2) + ($nota3art * $peso3)) / ($peso1 + $peso2 + $peso3);
    //-----------------------------------------------------------------------------------------------------
    ?>

    <div class="row" style="background-color: white; padding:15px; border-radius:10px; margin-top:20px;">

        <div class="col-sm-4">
            <h2 style="text-align: center;">Notas</h2>
            <table>
                <tr>
                    <th scope="col">Mátemática</th>
                    <th scope="col">Ciências</th>
                    <th scope="col">Artes</th>
                </tr>
                <tr>
                    <td><?= numfmt_format($formatação, $nota1mat) ?></td>
                    <td><?= numfmt_format($formatação, $nota1cie) ?></td>
                    <td><?= numfmt_format($formatação, $nota1art) ?></td>
                </tr>
                <tr>
                    <td><?= numfmt_format($formatação, $nota2mat) ?></td>
                    <td><?= numfmt_format($formatação, $nota2cie) ?></td>
                    <td><?= numfmt_format($formatação, $nota2art) ?></td>
                </tr>
                <tr>
                    <td><?= numfmt_format($formatação, $nota3mat) ?></td>
                    <td><?= numfmt_format($formatação, $nota3cie) ?></td>
                    <td><?= numfmt_format($formatação, $nota3art) ?></td>
                </tr>

            </table>
        </div>

        <div class="col-sm-4">
            <h2 style="text-align: center;">Pesos</h2>
            <table>
                <tr>
                    <th scope="col">Nota 1 </th>
                    <th scope="col">Nota 2</th>
                    <th scope="col">Nota 3</th>
                </tr>
                <tr>
                    <td>Peso <?= $peso1 ?></td>
                    <td>Peso <?= $peso2 ?></td>
                    <td>Peso <?= $peso3 ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-4">
            <h2 style="text-align: center;">Média</h2>
            <table>
                <tr>
                    <th scope="col">Mátemática</th>
                    <th scope="col">Ciências</th>
                    <th scope="col">Artes</th>
                </tr>
                <tr>
                    <td><?= number_format($mediaponderadamat, 1, ",", ".") ?></td>
                    <td><?= number_format($mediaponderadacie, 1, ",", ".") ?></td>
                    <td><?= number_format($mediaponderadaart, 1, ",", ".") ?></td>
                </tr>
                <tr>
                    <td>
                        <?php if ($mediaponderadamat > 7.5) {
                            echo "Aprovado";
                        } else {
                            echo "Reprovado";
                        }  ?>
                    </td>

                    <td> 
                        <?php if ($mediaponderadacie > 7.5) {
                                echo "Aprovado";
                            } else {
                                echo "Reprovado";
                            }  ?>
                            </td>

                    <td> 
                        <?php if ($mediaponderadaart > 7.5) {
                                echo "Aprovado";
                            } else {
                                echo "Reprovado";
                            }  ?>
                            </td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>