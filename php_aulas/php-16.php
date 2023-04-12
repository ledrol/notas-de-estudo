<!--Exercício do vídeo 19-->
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
                $v= array("A","J","M","X","K");
                print_r($v);
                var_dump($v);//Mostra mais informações: tipo e quantidade de elementos

                //'count' para contar elementos
                $v= array("A","J","M","X","K");
                echo "O vetor tem ". count($v) . " elementos</br>";
                print_r($v);

                //Adicionando elementos
                $v= array("A","J","M","X","K");
                $v[]="O"; //adiciona ao fim do vetor com índice automático
                print_r($v);

                //Adicionando elementos
                $v= array("A","J","M","X","K");
                array_push($v,"O"); //adiciona ao fim do vetor com índice automático            
                print_r($v);

                //Removendo elementos
                $v= array("A","J","M","X","K");
                array_pop($v); //remove ao fim do vetor com índice automático            
                print_r($v);

                //Adicionando elementos[inicio]
                 $v= array("A","J","M","X","K");
                 array_unshift($v,"O"); //adiciona ao início do vetor com índice automático            
                 print_r($v);

                //Removendo elementos[início]
                $v= array("A","J","M","X","K");
                array_shift($v); //remove ao início do vetor com índice automático            
                print_r($v);

                //Ordenando elementos do vetor
                $v= array("A","J","M","X","K");
                sort($v); //Ordena elementos do vetor            
                print_r($v);

                //Ordem reversa dos elementos do vetor
                $v= array("A","J","M","X","K");
                rsort($v); //Ordenação reversa dos elementos do vetor            
                print_r($v);

                //Ordenação associativa dos elementos do vetor
                $v= array("A","J","M","X","K");
                asort($v); //Ordena elementos[sem alterar o índice] do vetor            
                print_r($v);

                //Ordenação associativa reversa dos elementos do vetor
                $v= array("A","J","M","X","K");
                arsort($v); //Ordenação reversa dos elementos[sem alterar o índice] do vetor            
                print_r($v);

                //Ordenando elementos do vetor por chaves[índice]
                $v= array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
                ksort($v); //Ordena elementos do vetor            
                print_r($v);

                //Ordem reversa dos elementos do vetor por chaves[índice]
                $v= array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
                krsort($v); //Ordena elementos do vetor            
                print_r($v);
            ?>  
            </pre>       
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
