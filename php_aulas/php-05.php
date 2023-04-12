<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Integrar HTML em PHP</title>                  
    </head>
    <body>
        <?php   //aula video 8            
            $valor = $_GET["v"];
            //echo "O valor enviado foi $valor";
            $rq = sqrt($valor);
            echo "A raiz de $valor é igual a ". number_format($rq,2);
        ?>
        <a href="php-05.html">Voltar</a>
    </body>
</html>
