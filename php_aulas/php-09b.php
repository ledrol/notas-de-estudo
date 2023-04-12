<!--Exercício do vídeo 12-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex </title>                      
    </head>
    <body>
        <div>
            <form action="php-08bb.php" method="get">
                <?php
                //Repetição do while [contador regressivo]
                $c = 10;
                do {                
                    echo "$c ";
                    $c--;
                }while ($c >= 1);
                ?>
            </form>
        
        <?php   
            
        ?>
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
