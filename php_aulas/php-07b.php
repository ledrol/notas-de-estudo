<!--Exercício do vídeo 10-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex </title>                      
    </head>
    <body>
        <?php   //aula ex 2  
            $d = isset($_GET["ds"])?$_GET["ds"]:0; 
            switch ($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Tempo de estudar !";
                    break;
                case 7:
                case 8:
                    echo "Tempo de descansar !";
                    break;
                default:
                    echo "Dia da semana inválido";
            }                               
        ?>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
