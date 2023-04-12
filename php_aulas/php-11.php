<!--Exercício do vídeo 14-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Funções em PHP Ex </title>                      
    </head>
    <body>
        <div> 
            <?php   //Funções sem retorno de valor [ou procedimento] em PHP
                function soma ($a, $b){
                    $s = $a + $b;
                    echo "<p>A soma vale $s</p>";
                }
                soma (3,4);
                soma (8,2);
                $x = 9;
                $y = 15;
                soma($x,$y);
            ?>         
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
