<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Valor final</title>
</head>
<body>
<?php
    //Declara as variáveis e captura os dados do formulário
    $n1 = $_POST['n1'];
	$x = $_POST['x'];
    $y = $_POST['y'];
    $n2 = 0;

    if ($x == 1)
    {
        $n2 = $n1 - ($n1 * 0.10);
        echo "O valor final é de R$ " . $n2 . "<br />";
    }
    else if ($x == 2)
    {
        if ($y <= 3)
        {
            echo "O valor final é de R$ " . $n1 . "<br />";
            echo "O valor de cada parcela é de R$ " . ($n1/$y) . "<br />";
        }
        else if ($y > 3 and $y <= 6)
        {
            $n2 = $n1 + (0.1 * $n1);
            echo "O valor final é de R$ " . $n2 . "<br />";
            echo "O valor de cada parcela é de R$ " . ($n2/$y) . "<br />";
        }
        else if ($y > 6)
        {
            $n2 = ($n1 + (0.2 * $n1));
            echo "O valor final é de R$ " . $n2 . "<br />";
            echo "O valor de cada parcela é de R$ " . ($n2/$y) . "<br />";
        }
    }
    else
    {
        echo "Opção inválida!";
    }
	
?>
</body>
</html>