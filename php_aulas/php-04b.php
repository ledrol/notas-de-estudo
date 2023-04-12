<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Igual e idêntico em PHP</title>                  
    </head>
    <body>
        <?php   //aula video 7b            
            $a = 3;
            $b = "3";
            /*
            == Verifica se é igual, tipos diferentes mas mesmo valor.
            === verifica se é idêntico, precisa ser igual e do mesmo tipo.
            */
            $r = ($a === $b)?"SIM":"NÃO";
            //echo "O resultado será $r";
            echo "As variáveis A e B são idênticas? $r";
        ?>
    </body>
</html>
