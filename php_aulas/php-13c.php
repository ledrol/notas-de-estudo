<!--Exercício do vídeo 16-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Funções string em PHP Ex 3</title>                      
    </head>
    <body>
        <div> 
            <?php   
                /*
                $t = "aqui esta um arquivo em jpg que penso estar mais coerente com o site. Estou contribuindo com esta imagem para a página principal";
                $r= wordwrap($t, 8,"</br>");//'wordwrap' faz a quebra de linha, aqui com 8 caracteres e '<br>'
                echo $r;
                */
                //função strlen
                $txt = "qualqquer coisa";
                $tamanho = strlen($txt);//número de letras de $txt 
                
                //função trim
                $nome="   José da Silva   ";
                echo(strlen($nome));
                $novo=trim($nome);//'trim' exclui espaços no início e no final de '$nome'
                echo($novo);
                echo(strlen($novo));

                //função ltrim
                $nome="   José da Silva   ";
                echo(strlen($nome));
                $novo=ltrim($nome);//'ltrim' exclui espaços a esquerda de '$nome'
                echo($novo);
                echo(strlen($novo));

                //função rtrim
                $nome="   José da Silva   ";
                echo(strlen($nome));
                $novo=rtrim($nome);//'rtrim' exclui espaços a direita de '$nome'
                echo($novo);
                echo(strlen($novo));

                //função str_word_cont
                $frase = "Eu vou estudar PHP";
                $cont = str_word_count($frase,0); //'str_word_cont'conta palavras da string
                print($cont);

                //função explode
                $site = "Curso em video";
                $vetor = explode(" ",$site);//'explode'cria um vetor com as strings de '$site' separadas por " "
                print_r($vetor);

                //função str_split
                $nome = "Coisa";
                $vetor = str_split($nome);//'str_split' transforma cada letra da palavra em '$nome' em um vetor
                print_r($vetor);

                //função implode
                $v[0]="Já";
                $v[1]="é";
                $v[2]="tarde";
                $texto = implode(" ",$v);//'implode' ou 'join()' junta os vetores em uma string
                print($texto);

                //função chr
                $letra = chr(67);
                echo "A letra de código 67 é $letra";

                //função ord
                $letra = "c";
                $cod = ord($letra);
                print("A letra $letra tem código $cod");
            ?>         
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
