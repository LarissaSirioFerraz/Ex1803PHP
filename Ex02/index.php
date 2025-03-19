<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Joalheria</title>
</head>
<body>
<fieldset>
    <legend>Pedido</legend>
    <form method="post" action="calcular.php">
        Digite seu nome:
        <input type="text" name="nome" size="25" />
        <br />
        Jóias:<br />
		1 – Colar de Prata(R$250,00)<br />
		2 – Colar de Ouro (R$1000,00)<br />
		3 – Brincos de Prata (R$200,00)<br />
		4 – Brincos de Ouro (R$800,00)<br />
		5 – Relógios de Luxo (R$5000,00)<br />
        <br />
		Informe o número do item que você deseja: 
		<input type="text" name="item" size="25" />
		<br />
		Informe quantos itens você deseja:
		<input type="text" name="qtdItens" size="25" />
		<br />
		<br />
        Anéis:<br />
		1 – Anél de Prata (R$150,00)<br />
		2 – Anél de Ouro (R$2000,00)<br />
        <br />
		Informe o número do anél que você deseja: 
		<input type="text" name="aneis" size="25" />
		<br />
		<br />
		Tamanho dos anéis:<br />
		3 – Entre 10 e 14 (+ R$3,00)<br />
		4 – Entre 16 e 20 (+ R$5,00)<br />
		5 – +22 (R$8,00)<br />
        <br />
		Informe o número do tamanho do anél que você deseja: 
		<input type="text" name="tamAneis" size="25" />
		<br />
		Informe quantos anéis você deseja: 
		<input type="text" name="qtdAneis" size="25" />
		<br />
		<br />
		<button type="submit">Calcular o Valor</button>
		<br />
		
    </form>
</fieldset>
</body>
</head>
</html>