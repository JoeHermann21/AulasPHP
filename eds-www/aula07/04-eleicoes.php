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
                $nasc = $_GET["n"];
                $idade = 2022 - $nasc;
                echo "Quem nasceu em $nasc tem $idade anos";
                $tipo = ($idade>=18 && $idade<=65)?"OBRIGATÓRIO":"OPCIONAL";
                echo "</br>Dessa forma, o voto é $tipo";
        	?>
    	</div>
    </body>
</html>