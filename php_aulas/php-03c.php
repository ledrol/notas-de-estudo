<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Variaveis referenciadas em PHP</title>                  
    </head>
    <body>
        <?php   //aula video 6            
            $a = 3;
            //$b = $a; //sem referência
            $b = &$a; //& faz uma referência de b na variável a
            $b += 5;
            echo "A variável a vale $a";
            echo "</br>A variável b vale $b";
        ?>
    </body>
</html>
