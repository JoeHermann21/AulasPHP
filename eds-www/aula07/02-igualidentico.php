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
                $a = 3;
                $b = "3";
                $r = ($a === $b) ? "SIM" : "NAO";
                $s = ($a == $b) ? "SIM" : "NAO";
                echo "As variaveis A e B são do mesmo tipo? $r";
                echo "</br>As variaveis A e B são idênticas? $s";
        	?>
    	</div>
    </body>
</html>