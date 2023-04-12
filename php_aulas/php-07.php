<!--Exercício do vídeo 10-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex </title>                      
    </head>
    <body>
        <?php   //aula video 10  
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $o = isset($_GET["oper"])?$_GET["oper"]:1;
            switch ($o) {
                case 1:
                    $r = $n*2;
                    break;
                case 2:
                    $r = $n^3;
                    break;
                case 3:
                    $r = sqrt($n); //ou $n^(1/2)
            }
            echo "O resultado da operação solicitada foi $r</br> ";           
        ?>
        <a href="php-07.html">Voltar</a>
    </body>
</html>
