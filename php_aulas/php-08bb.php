<!--Exercício do vídeo 11-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex </title>                      
    </head>
    <body>
        <?php   //aula ex, usando 'while' para receber os valores com '$_GET' 
            
            //meu modo
            $i = 1; 
            while ($i <= 5){
                $r = $_GET["v$i"]; //Pega os valores do formulário do arquivo 'php-08b.php'            
                echo "$r </br>";
                $i++;
            }
            /*
            //modo alternativo [mostrado no vídeo]
            $i = 1;
            while ($i <= 5){ //Este enquanto vai pegar os dados da url
                $v = "num".$i;
                $url = "v".$i;
                //Usando variável de variável, '$$v' recebe, na passagem 1, '$num1'
                $$v = isset($_GET[$url])?$_GET[$url]:0;
                $i++;
            }
            $i = 1;
            while ($i <= 5){ //Este enquanto pega os dados e mostra na tela
                $v = "num".$i;
                echo "Valor $i : ".$$v ."</br>";
                $i++;
            }
            */
            /*
            Dentro de um comando de repetição, 'break' interrompe a repetição 'while' e sai p/ baixo.
            Já o comando 'continue' interrompe a repetição do bloco 'while' e volta p/ cima na condição 'while'.
            */
        ?>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
