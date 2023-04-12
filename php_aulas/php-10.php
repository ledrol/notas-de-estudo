<!--Exercício do vídeo 13-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex </title>                      
    </head>
    <body>
        <div>            
            <?php //uso da repetição com 'for'
                //Contagem progressiva 1 em 1
                for($i= 1;$i<=10;$i++){
                    echo "$i ";
                }
                echo "</br>";
                //Contagem regressiva 1 em 1
                for($i = 10;$i>=1;$i--){
                    echo "$i ";
                }
                echo "</br>";
                //Contagem progressiva 5 em 5
                for($i=0;$i<=50;$i+=5){
                    echo "$i ";
                }
                echo "</br>";
                //Contagem regressiva 2 em 2
                for($i=20;$i>=0;$i-=2){
                    echo "$i ";
                }
            ?>                    
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
