<!--Exercício do vídeo 18-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Funções vetores em PHP Ex </title>                      
    </head>
    <body>
        <div> 
            <pre> <!--Pré formatação melhora visualização de vetor-->
            <?php  
                //vetor com  array
                $n = array(3,5,8,2);
                $n[]=7;//'[]'coloca automaticamente o valor no fim
                print_r($n);//'print_r'mostra itens do vetor

                //vetor com range
                $c = range(5,20,2);//'range'começa em 5, vai até 20 pulando de 2 em 2
                print_r($c);

                //vetor com foreach[é uma estrutura de repetição]
                $c = range(5,20,2);
                foreach($c as $v){ //para cada elemento de '$c' tratado como valor '$v', mostre '$v'
                    echo "$v ";
                }
                
                /*
                vetor com foreach [com formatação]
                Abaixo de <pre>: '<table border="1"><tr>'
                Acima de </pre>: '</table>'
                Alterar: 'echo "<td>$v ";'
                */

                //vetor com chaves [índice e valor] personalizadas
                $v = array ( 3=>5,
                             1=>9,
                             0=>8,
                             7=>7);
                print_r($v);

                //desalocando[eliminar] elementos do vetor 
                $v = array ( 3=>5,
                             1=>9,
                             0=>8,
                             7=>7);
                unset($v[0]);//eliminar elemento de índice 0
                print_r($v);

                //vetor com chaves associativas
                $v = array ( "nome"=>"Ana",
                             "idade"=>23,
                             "peso"=>65.5);                
                print_r($v);

                //vetor de chaves associativas com 'foreach'
                $v = array ( "nome"=>"Ana",
                             "idade"=>23,
                             "peso"=>65.5);
                foreach ($v as $k => $c) {
                    echo "O campo $k possui o conteúdo $c</br>";
                }

                //Matriz em PHP: vetores dentro de vetores
                $m = array(array(6,4),
                           array(4,9), 
                           array(3,2));
                $m[0][1]=$m[2][0];//Troca o valor do item da linha zero, coluna 1 por linha 2 coluna 0
                print_r($m);
            ?>  
            </pre>       
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
