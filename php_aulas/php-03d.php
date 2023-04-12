<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>variaveis de variaveis em PHP</title>                  
    </head>
    <body>
        <?php   //aula video 6            
            $x = "abc";
            $$x = "def"; //$$x é o mesmo que $abc            
            echo "O conteúdo da variável X é $x";
            echo "</br>A variável ABC criada recebeu o valor $abc";
        ?>
    </body>
</html>
