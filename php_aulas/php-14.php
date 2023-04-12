<!--Exercício do vídeo 17-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Funções string em PHP Ex </title>                      
    </head>
    <body>
        <div> 
            <?php   
                /*
                $t = "aqui esta um arquivo em jpg que penso estar mais coerente com o site. Estou contribuindo com esta imagem para a página principal";
                $r= wordwrap($t, 8,"</br>");//'wordwrap' faz a quebra de linha, aqui com 8 caracteres e '<br>'
                echo $r;
                */
                //função strtolower
                $nome = "Qualquer Coisa";
                $nome2 = strtolower($nome);//'strtolower'converte em letras minúsculas
                echo "Seu nome é $nome2";

                //função strtoupper
                $nome = "Qualquer Coisa";
                print("Seu nome é".strtoupper($nome));

                //função ucfirst
                $nome = "qualquer coisa";
                print("Seu nome é".ucfirst($nome)); //'ucfirst' transforma a primeira letra em maiúsculo

                //função ucwords
                $nome = "qualquer coisa";
                $nome2 = ucwords($nome);//'ucwords'converte em letras maiúsculas as primeiras letras de cada palavra
                echo "Seu nome é $nome2";

                //função strrev
                $nome = "Qualquer Coisa";
                print("Seu nome é".strrev($nome));//imprime a string espelhada

                //função strpos
                $frase = "Estou aprendemdo PHP";
                $pos= strpos($frase, "PHP");//Mostra a posição da string 'PHP'
                echo "$frase </br> A string foi encontrada na posição $pos";

                //função stripos
                $frase = "Estou aprendemdo PHP";
                $pos= stripos($frase, "PHP");//Mostra a posição da string 'PHP' ignorando maiúscula
                print("Encontrada na posição $pos");

                //função substr_count
                $frase = "Estou aprendemdo PHP no curso de PHP no youtube";
                $cont= substr_count($frase, "PHP");
                print("PHP Encontrado $cont vezes");

                //função substr
                $site = "Qualquer coisa";
                $sub = substr($site,0,5);//'substr' corta strings de '$site', onde 0 é a primeira e 5 a última letra
                echo "$sub ";

                //função str_pad
                $nome = "Alguém";
                $novo = str_pad($nome,30," ",str_pad_right);//'str_pad' irá colocar 30 ' ' a direita de '$nome'
                print("Também $novo é igual a ninguém!");

                //função str_repeat
                $txt = str_repeat("PHP",5);
                print("O texto gerado foi $txt");

                //função str_replace
                $frase = "Gosto de estudar matemática!!!";
                $novaFrase = str_replace("matemática","PHP",$frase);
                print($novaFrase);
            ?>         
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
