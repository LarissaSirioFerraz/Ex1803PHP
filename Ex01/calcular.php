<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pedido</title>
</head>
<body>
<?php
    //Declara as variáveis e captura os dados do formulário
    $nome = $_POST['nome'];
	$lanches = $_POST['lanches'];
	$qtdLanches = $_POST['qtdLanches'];
	$bebidas = $_POST['bebidas'];
	$tamBebidas = $_POST['tamBebidas'];
	$qtdBebidas = $_POST['qtdBebidas'];
	$precoL = 0;
	$precoB = 0;
	
    // Calculando
    if ($lanches == 1)
	{
		$precoL = 6 * $qtdLanches;
	}
	else if ($lanches == 2)
	{
		$precoL = 8 * $qtdLanches;
	}
	else if ($lanches == 3 * $qtdLanches)
	{
		$precoL = 10 * $qtdLanches;
	}
	else if ($lanches == 4)
	{
		$precoL = 12 * $qtdLanches;
	}
	else if ($lanches == 5)
	{
		$precoL = 15 * $qtdLanches;
	}	

	if ($bebidas == 1 && $tamBebidas == 3)
	{
		$precoB = (2 + 3) * $qtdBebidas;
	}
	else if ($bebidas == 1 && $tamBebidas == 4)
	{
		$precoB = (2 + 5) * $qtdBebidas;
	}
	else if ($bebidas == 1 && $tamBebidas == 5)
	{
		$precoB = (2 + 8) * $qtdBebidas;
	}
	else if ($bebidas == 2 && $tamBebidas == 3)
	{
		$precoB = (5 + 3) * $qtdBebidas;
	}
	else if ($bebidas == 2 && $tamBebidas == 4)
	{
		$precoB = (5 + 5) * $qtdBebidas;
	}
	else if ($bebidas == 2 && $tamBebidas == 5)
	{
		$precoB = (5 + 8) * $qtdBebidas;
	}
	
	echo $nome . ", o valor total da compra é: " . $precoL + $precoB;
?>
</body>
</html>