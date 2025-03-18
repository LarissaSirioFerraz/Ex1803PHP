<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Valor final</title>
</head>
<body>
<fieldset>
    <legend>CALCULAR</legend>
    <form method="post" action="calcular.php">
        Informe o total gasto da compra:
        <input type="number" name="n1" size="25" /><br />
        Digite 1 para pagar a vista e 2 para pagar a prazo:
        <input type="number" name="x" size="25" /><br />
        Se for a prazo terá quantas parcelas:
        <input type="number" name="y" size="25" /><br />

		<button type="submit">Calcular</button>
        <br />
    </form>
</fieldset>
</body>
</html>