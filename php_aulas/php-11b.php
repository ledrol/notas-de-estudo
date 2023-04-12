<!--Exercício do vídeo 14-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Funções em PHP Ex 2</title>                      
    </head>
    <body>
        <div> 
            <?php   //Funções com retorno de valor em PHP
                function soma ($a, $b){
                    $s = $a + $b;
                    return $s; //Pode ser feito também 'return $a + $b' e o resultado será igual.
                }
                $x = 3;
                $y = 4;
                $r = soma($x, $y);
                echo "A soma entre $x e $y é igual a $r";
            ?>         
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
