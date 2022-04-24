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
                $n = isset($_GET["num"]) ? $_GET["num"] : 0;
                $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
                switch ($o){
                    case 1:
                        echo "O dobro de $n é ".$n * 2;
                        break;
                    case 2:
                        echo "O cubo de $n é ".pow($n,3);
                        break;
                    case 3:
                        echo "A raiz quadrada de $n é ".sqrt($n);
                }

        	?>
            </br><a href="exercicio01.html" class="botao">Voltar</a>
    	</div>
    </body>
</html>