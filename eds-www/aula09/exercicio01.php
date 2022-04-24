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
                $a = isset($_GET["ano"]) ? $_GET["ano"] : 0;
                $i = date("Y") - $a;
                echo "Seu ano de nascimento é $a e tem $i anos";
                if($i >= 18){
                    $v = "já pode votar";
                    $d = "já pode dirigir";
                }
                else{
                    $v = "não pode voltar";
                    $d = "não pode dirigir";
                }
                echo "</br>Com essa idade você $v e $d";

        	?>
            </br><a href="exercicio01.html">Voltar</a>
    	</div>
    </body>
</html>