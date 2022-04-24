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
                $estado = $_GET["estado"];
                error_reporting(0);
                switch ($estado){
                    case AC:
                    case AP:
                    case AM:
                    case PA:
                    case RO:
                    case RR:
                    case TO:
                        echo "O estado de $estado fica na região Norte";
                        break;
                    case AL:
                    case BA:
                    case CE:
                    case MA:
                    case PB:
                    case PE:
                    case PI:
                    case RN:
                    case SE:
                        echo "O estado de $estado fica na região Nordeste";
                        break;
                    case DF:
                    case GO:
                    case MT:
                    case MS:
                        echo "O estado de $estado fica na região Centro-Oeste";
                        break;
                    case ES:
                    case MG:
                    case RJ:
                    case SP:
                        echo "O estado de $estado fica na região Sudeste";
                        break;
                    case PA:
                    case SC:
                    case RS:
                        echo "O estado de $estado fica na região Sul";
                }

        	?>
            </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    	</div>
    </body>
</html>