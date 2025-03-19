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
	$item = $_POST['item'];
	$qtdItens = $_POST['qtdItens'];
	$aneis = $_POST['aneis'];
	$tamAneis = $_POST['tamAneis'];
	$qtdAneis = $_POST['qtdAneis'];
	$precoJ = 0;
	$precoA = 0;
	
    // Calculando
    if ($item == 1)
	{
		$precoJ = 250 * $qtdItens;
	}
	else if ($item == 2)
	{
		$precoJ = 1000 * $qtdItens;
	}
	else if ($item == 3 * $qtdItens)
	{
		$precoJ = 200 * $qtdItens;
	}
	else if ($item == 4)
	{
		$precoJ = 800 * $qtdItens;
	}
	else if ($item == 5)
	{
		$precoJ = 5000 * $qtdItens;
	}	

	if ($aneis == 1 && $tamAneis == 3)
	{
		$precoA = (150 + 3) * $qtdAneis;
	}
	else if ($aneis == 1 && $tamAneis == 4)
	{
		$precoA = (150 + 5) * $qtdAneis;
	}
	else if ($aneis == 1 && $tamAneis == 5)
	{
		$precoA = (150 + 8) * $qtdAneis;
	}
	else if ($aneis == 2 && $tamAneis == 3)
	{
		$precoA = (2000 + 3) * $qtdAneis;
	}
	else if ($aneis == 2 && $tamAneis == 4)
	{
		$precoA = (2000 + 5) * $qtdAneis;
	}
	else if ($aneis == 2 && $tamAneis == 5)
	{
		$precoA = (2000 + 8) * $qtdAneis;
	}
	
	echo $nome . ", o valor total da compra é: " . $precoJ + $precoA;
?>
</body>
</html>