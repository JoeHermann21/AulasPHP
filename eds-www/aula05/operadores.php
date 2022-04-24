<!DOCTYPE html>
<html>
<head>
	<meta chartset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title></title>
</head>
<body>
<div>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		echo "<h2>Valores recebidos: $n1 e $n2</h2>";
		echo "A soma de $n1 com $n2 vale ".($n1+$n2);
		echo "</br>A subtração de $n1 por $n2 vale ".($n1-$n2);
		echo "</br>A multiplicação de $n1 por $n2 vale ".($n1*$n2);
		echo "</br>A divisão de $n1 por $n2 vale ".($n1/$n2);
		echo "</br>O resto da divisão (módulo) de $n1 por $n2 vale ".($n1%$n2);
		echo "</br>A média de $n1 e $n2 vale ".(($n1+$n2)/2);
	?>
</div>
</body>
</html>