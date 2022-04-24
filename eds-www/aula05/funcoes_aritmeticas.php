<!DOCTYPE html>
<html>
<head>
	<meta chartset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Funções Aritméticas</title>
	<style>
		h2{
			font: 15pt Arial;
			color: #171559;
			font-weight: bold;			
		}
	</style>
</head>
<body>
<div>
	<?php
		$v1 = $_GET["x"];
		$v2 = $_GET["y"];
		echo "<h2>Valores recebidos: $v1 e $v2</h2>";
		echo "O valor absoluto de $v2 é " . abs($v2);
		echo "</br>O valor de $v1<sup>$v2</sup> é ".pow($v1,$v2);
		echo "</br>A raiz quadrada de $v1 é ".sqrt($v1);
		echo "</br>A raiz quadrada de $v2 é ".sqrt($v2);
		echo "</br>O valor de $v1 e $v2 arredondados são ".round($v1)." e ".round($v2);
		echo "</br>O valor de $v1 e $v2 arredondados para cima são ".ceil($v1)." e ".ceil($v2);
		echo "</br>O valor de $v1 e $v2 arredondados para baixo são ".floor($v1)." e ".floor($v2);
		echo "</br>A parte inteira de $v1 é ".intval($v1);
		echo "</br>A parte inteira de $v2 é ".intval($v2);
		echo "</br>O valor de $v1 em moeda é R$ ".number_format($v1,2,",",".");
		echo "</br>O valor de $v2 em moeda é R$ ".number_format($v2,2);

	?>
</div>
</body>
</html>