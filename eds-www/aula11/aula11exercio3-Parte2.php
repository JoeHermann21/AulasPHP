<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8">
        <title>Curso de PHP</title>
    </head>
    <body>
        <div>
            <form method="get" action="exercicio03.html">
                <?php

                 $in = $_GET["inicio"] ? $_GET["inicio"] : 0;
                 $fim = $_GET["fina"] ? $_GET["fina"] : 0;
                 $inc = $_GET["incremento"] ? $_GET["incremento"] : 0;
                 
                 
                 echo "$in ";
                 
                 if($in < $fim)   /* Essa condição é para especificar que haverá uma incrementação */
                 {
                  while($in <= $fim)
                  { 
                   $in += $inc;
                  
                    if($in <= $fim)
                    {
                     echo "$in ";
                    }
                  }
                 }
                 else      /* Nesse caso, essa condição é para especificar que haverá uma decrementação */
                 {
                  while($in >= $fim)
                  { 
                   $in -= $inc;
                  
                    if($in >= $fim)
                    {
                     echo "$in ";
                    }
                  } 
                  
                  
                 }
                 
                 ?>
                <input type="submit" value="Voltar" class="botao"/>                      
            </form>
        </div>
    </body>
</html>