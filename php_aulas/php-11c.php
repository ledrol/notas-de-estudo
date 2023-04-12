<!--Exercício do vídeo 14-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Funções em PHP Ex 3</title>                      
    </head>
    <body>
        <div> 
            <?php   //Funções com múltiplos parâmetros [ou parâmetros variáveis] em PHP
                function soma (){
                    $p = func_get_args(); //Função que pega todos os argumentos e coloca num vetor
                    $t = func_num_args(); //Retorna o número de argumentos que foram passados
                    $s = 0;
                    for ($i=0; $i < $t; $i++) { 
                        $s += $p[$i];
                    }
                    return $s;
                }                
                $r = soma(3, 5, 2);//Pode-se passar uma quantia qualquer de parâmetros 
                echo "A soma dos valores é $r";
            ?>         
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
