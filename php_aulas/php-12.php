<!--Exercício do vídeo 15-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Funções em PHP Ex 1</title>                      
    </head>
    <body>
        <div> 
            <?php   //Funções com passagem de parâmetro por valor
                function teste (&$x){ //Para se passar um parâmetro por referência, acrescenta-se '&' na variável
                    $x += 2;                                    
                    echo "<p>O valor de X é $x</p>";
                }                
                $a = 3;
                teste($a);
                echo "<p>O valor de A é $a</p>";
            ?>         
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
