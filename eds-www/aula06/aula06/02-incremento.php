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
        		$atual = $_GET["aa"];
                echo "Nós estamos no ano $atual";
                echo "</br>O ano passado foi ". --$atual;
        	?>
    	</div>
    </body>
</html>