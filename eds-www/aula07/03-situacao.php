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
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $media = ($nota1 + $nota2)/2;
                //$situacao = ($media>5) ? "Aprovado" : "Reprovado";
                echo "A nota 1 do aluno é $nota1";
                echo "</br>A nota 2 do aluno é $nota2";
                echo "</br>A média do aluno foi $media";
                echo "</br>Situação: ".(($media>5) ? "Aprovado" : "Reprovado");

        	?>
    	</div>
    </body>
</html>