<!--Exercício do vídeo 11-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex </title>                      
    </head>
    <body>
        <?php   //aula ex 1 
            /* Conttagem progressiva
            $c = 1;
            while ($c <=10) {
                echo $c . "</br>";
                $c++; //ou '$c +=1' ou '$c=$c+1';
            } 
            */ 
            //Contagem regressiva
            $c = 10;
            while ($c >=1) {
                echo $c . "</br>";
                $c--; //ou '$c +=1' ou '$c=$c+1';
            }             
        ?>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
