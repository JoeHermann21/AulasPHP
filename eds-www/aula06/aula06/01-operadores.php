<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8">
        <title>Curso de PHP</title>
    </head>
    <body>
    	<div>
        	<?php
        		$preco = $_GET["p"];
        		echo "O preço do produto é R$ ".number_format($preco, 2);
                $porcentagem = ($preco*10)/100;
                $preco += $porcentagem;
                echo "</br>E o novo preço com 10% de aumento é R$ ".number_format($preco, 2);
                //$preco -= $porcentagem;
                //echo "</br>E o novo preço com 10% de desconto é R$ $preco";

        	?>
    	</div>
    </body>
</html>
