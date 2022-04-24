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
                if($i < 16){
                    $tipoVoto = "não vota";
                }
                    else if($i < 18 || $i>=65){
                        $tipoVoto = "voto opcional";
                    }
                    else{
                        $tipoVoto = "voto obrigatório";
                    }
                
                echo "</br>Para essa idade, $tipoVoto";

        	?>
            </br><a href="exercicio02.html">Voltar</a>
    	</div>
    </body>
</html>