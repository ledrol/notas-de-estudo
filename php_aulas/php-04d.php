<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>EX voto em PHP</title>                  
    </head>
    <body>
        <?php   //aula video 7d            
            $ano = $_GET["an"];
            
            $idade = 2019 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos";
            $tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";//'and' ou '&&'
            echo "</br>Assim, seu voto é $tipo";
        ?>
    </body>
</html>
