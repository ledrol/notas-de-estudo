<!--Exercício do vídeo 16-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Funções string em PHP Ex </title>                      
    </head>
    <body>
        <div> 
            <?php   //Usando rotinas [Funções] externas
                $p = "DVD";
                $pr = 4.5;
                //echo "O $p custa R$ $pr"; [1]
                //echo "O $p custa R$ ". number_format($pr,2); [2]
                //usanso printf
                printf("O %s custa R$ %.2f",$p,$pr);//'%s' é para string e '%.2f' é para float com 2 casas dec.
            ?>         
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
