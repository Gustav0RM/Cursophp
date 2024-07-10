<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>09 Conversor API</title>
</head>

<body>
    <section>
        <h1>&#128181; Conversão Real - Dólar &#128177;</h1>
        <hr>

        <p>
            <?php
            
            //Configuração para puxar sempre uma data atual da cotação
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            //--------------------------------------------------------

            //configuração da API 
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotação = $dados["value"][0]["cotacaoCompra"];
            //---------------------------------------------------------------

            //puxando dados do formulário
            $carteira = $_GET["carteira"]; 

            // conversão
            $converte = $carteira / $cotação; 

            // MÉTODO UTILIZANDO A FORMATAÇÃO PARA EXIBIR 2 casas decimais depois da vírgula e trocar o local da , pelo .

            // echo "R$ " . number_format($carteira, 2, ",", "." )."  equivalem a U$ ". number_format($converte,2, ",", ".")."<br>";  

            // echo "<br>a cotação atual é de " . number_format($cotação,2, ",", ".");
            //-----------------------------------------------------------------------------

            // utilizando método de internacionalização
              $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY); 

            echo numfmt_format_currency($padrão, $carteira, "BRL") . "  equivalem a U$ " . number_format($converte, 2, ",", ".") . "<br>";
            //------------------------------------------------------------------------------

            ?>

            Cotação de acordo com o <a target="_blank" rel="external" href="https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios/resource/43a16981-5a4b-47d9-b7bd-4c0c4093f994?inner_span=True"> Banco do Brasil &#127974;</a>
        </p>


        <p class="navega">
            <a href="../Cursophp/ex10.php">Avançar</a>
            <a href="../Cursophp/ex09.html">Retornar</a><br>
            <a href="../Cursophp/">Index</a>

        </p>
    </section>

</body>

</html>