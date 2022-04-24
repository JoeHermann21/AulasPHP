<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8">
        <title>Curso de PHP</title>
    </head>
    <body>
        <div>
            <form method="get" action="02-parte1.php">
                <?php
                 $i = 1;
                 while($i <= 5){
                    $v = "num".$i;
                    $url ="v".$i;
                    $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                    $i++;
                 }

                 $i = 1;
                 while($i <= 5){
                    $v = "num".$i;
                    echo "Valor $i : ".$$v."<br/>";
                    $i++;
                 }

                 ?>
                <input type="submit" value="Enviar" class="botao"/>                      
            </form>
        </div>
    </body>
</html>