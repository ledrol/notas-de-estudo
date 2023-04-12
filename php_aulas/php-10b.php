<!--Exercício do vídeo 13-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex </title>                      
    </head>
    <body>
        <div>            
            <?php //Exercício tabuada
                $t = $_GET["val"]; 
                $r=0;               
                for ($i=1; $i <= 10 ; $i++) { 
                    $r = $r + $t;
                    echo " $t x $i = $r</br>";                                        
                }
            ?>                    
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
