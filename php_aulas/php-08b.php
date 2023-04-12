<!--Exercício do vídeo 11-->
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
                $c = 1;
                while ($c <= 5){  //Repetição de um formulário HTML              
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'></br>";
                    $c++;
                }
                ?>
                <input type="submit" value="Enviar">
            </form>
        
        <?php   //aula ex 2: criar dinamicamente 5 caixas de texto em 1 formulário. 
            
        ?>
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
