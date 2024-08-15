<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Estruturas de repetição</title>
</head>

<body>
	<main>
	<form action="ex25.php" method="post">Crescimento anual
		<label for="populacaoA">Insira a população A</label>
		<input type="number" name="populacaoA" id="populacaoA">
		<label for="populacaoB">Insira a população B</label>
		<input type="number" name="populacaoB" id="populacaoB">
		<label for="crescimentoB">Taxa de crescimento anual da população B</label>%
		<input type="number" name="crescimentoB" id="crescimentoB" step="0.01" min="0.01" max="100">
		<input type="submit" value="Verificar">

	</form>

	<?php
	$populacaoA = $_POST["populacaoA"] ?: 0;
	$populacaoB = $_POST["populacaoB"] ?: 0;
	$crescimentoB = $_POST["crescimentoB"] ?: 0;
	$aumento = ($crescimentoB / 100) * $populacaoB;
	$count = 0;

	// verificar os retornos
	// var_dump($populacaoA);
	// var_dump($populacaoB);
	// var_dump($crescimentoB);
	// var_dump($aumento);

	if ($populacaoA > $populacaoB) 
	{		
	do
		{
		$populacaoB += $aumento;
		$count++;
		echo $count;
		}
		while ($populacaoB < $populacaoA);
	} 
	elseif ($populacaoA == $populacaoB) 
	{
		echo "<br>Insira um número válido<br>";
	}
	else 
	{
		echo '<br>População A é menor que população B, insira novamente<br>';
	}

	?>

	</main>

	<article>

	<p><?= "A população B levaria em média $count anos para se igualar a população A"?></p>

	<p class="navega">
    <a href="../Cursophp/ex26.php">Avançar</a>
    <a href="../Cursophp/ex24.php">Retornar</a><br>
    <a href="../Cursophp/">Index</a>

  </p>

	</article>

</body>

</html>