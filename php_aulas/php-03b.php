<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operadores de incremento em PHP</title>                  
    </head>
    <body>
        <?php   //aula video 6            
            $atual = $_GET["aa"];
            echo "O ano atual é $atual e o ano anterior é " . --$atual;
        ?>
    </body>
</html>
