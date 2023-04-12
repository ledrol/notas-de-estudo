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
                //Repetição do while [contador progressivo]
                $c = 0;
                do {                
                    echo "$c ";
                    $c+= 2; //conta de 2 em 2
                }while ($c <= 20);
                ?>
            </form>
        
        <?php   
            
        ?>
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
