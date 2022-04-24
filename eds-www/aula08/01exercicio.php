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
                $valor = $_GET["v"];
                echo "A raiz quadrada de $valor é ".number_format(sqrt($valor),2);
        	?>
            <a href="01exercicio.html">Voltar</a>
    	</div>
    </body>
</html>