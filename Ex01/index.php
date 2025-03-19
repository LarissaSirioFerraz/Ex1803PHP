<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lanchonete</title>
</head>
<body>
<fieldset>
    <legend>Pedido</legend>
    <form method="post" action="calcular.php">
        Digite seu nome:
        <input type="text" name="nome" size="25" />
        <br />
        Menu de lanches:<br />
		1 – X Burguer (R$6,00)<br />
		2 – X Salada (R$8,00)<br />
		3 – X Bacon (R$10,00)<br />
		4 – X Tudo (R$12,00)<br />
		5 – X Duplo (R$15,00)<br />
        <br />
		Informe o número do lanche que você deseja: 
		<input type="text" name="lanches" size="25" />
		<br />
		Informe quantos lanches você deseja:
		<input type="text" name="qtdLanches" size="25" />
		<br />
		<br />
        Menu de bebidas:<br />
		1 – Água (R$2,00)<br />
		2 – Suco (R$5,00)<br />
        <br />
		Informe o número da bebida que você deseja: 
		<input type="text" name="bebidas" size="25" />
		<br />
		<br />
		Tamanho das bebidas:<br />
		3 – Lata (R$3,00)<br />
		4 – 600 ml (R$5,00)<br />
		5 – 2 Litros (R$8,00)<br />
        <br />
		Informe o número do tamanho da bebida que você deseja: 
		<input type="text" name="tamBebidas" size="25" />
		<br />
		Informe quantas bebidas você deseja: 
		<input type="text" name="qtdBebidas" size="25" />
		<br />
		<br />
		<button type="submit">Calcular o Valor</button>
		<br />
		
    </form>
</fieldset>
</body>
</head>
</html>