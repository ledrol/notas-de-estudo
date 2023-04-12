<!--Exercício do vídeo 12-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex </title>                      
    </head>
    <body>
        <div>            
            <?php
            //Exercicio fatorial
            $v = isset($_GET["val"]) ?$_GET["val"]:1;
            echo "<h1>Calculando o fatorial de $v </h1>";            
            $c = $v;
            $fat = 1;
            do {                
                $fat = $fat*$c;
                $c--;
            }while ($c >= 1);
            echo "<h2>$v ! = $fat </h2>";
            ?>                    
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
