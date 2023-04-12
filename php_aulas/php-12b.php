<!--Exercício do vídeo 15-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Funções em PHP Ex 2</title>                      
    </head>
    <body>
        <div> 
            <?php   //Usando rotinas [Funções] externas
                include "php-12b-func2.php"; //'include'inclui arquivo externo
                /*
                'require' também inclui arquivo externo
                Há também 'include_once' e 'require_once', carregar o arquivo apenas 1 vez
                */
                echo "<h1>Testando outras funções</h1>";
                ola();
                mvalor(4);
            ?>         
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
