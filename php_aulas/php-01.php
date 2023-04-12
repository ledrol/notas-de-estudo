<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Primeiro exemplo PHP</title>             
    </head>
    <body>
        <h1>Testando PHP</h1>
        <?php   //aula video 4
            $nome = "Teste";    //Toda variável necessita de $
            $numero1 = 01;
            $numero2 = 02;
            //Concatenação modo 1
            echo "Esse é o ".$nome. " número ".$numero1; //O ponto é um símbolo de concatenação
            //Concatenação modo 2
            echo "</br>Esse é o $nome número $numero2";
        ?>
    </body>
</html>
