<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operações aritméticas em PHP</title>             
    </head>
    <body>
        <?php   //aula video 5a            
            $n1 = 3;
            $n2 = 2;
            $s = $n1 + $n2;
            //Para receber as variáveis fornecidas pelo usuário[na url do navegador], deve-se usar:
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                echo "<h1>Os valores recebidos são $n1 e $n2 </h1></br>";
            //Exemplo soma
            echo "A soma entre $n1 e $n2 é igual a $s";
            //Exemplo soma com Concatenação '.' e somando diretamente dentro de '()'
            echo "</br>A soma vale ". ($n1 + $n2);
            //Exemplo com o restante dos operadores
            echo "</br>A subtração vale ". ($n1 - $n2);
            echo "</br>A multiplicação vale ". ($n1 * $n2);
            echo "</br>A divisão vale ". ($n1 / $n2);
            echo "</br>O módulo vale ". ($n1 % $n2);
            echo "</br>A média vale ". ($s / $n2);
        ?>
    </body>
</html>
