<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>exemplo PHP</title>
        
    </head>
    <body>
        <?php
           $n1=3;
           $n2=2;
           $s=$n1+$n2;
           $m=($n1+$n2)/2;
           /*aula 5*/
           /*utilizando outros operadores*/
           echo "A soma vale ". ($n1 + $n2);
           echo "<br/>A subtração vale ". ($n1 - $n2);
           echo "<br/>A multiplicação vale ". ($n1 * $n2);
           echo "<br/>A divisão vale ". ($n1 / $n2);
           echo "<br/>O modulo vale ". ($n1 % $n2);
           echo "<br/>A média vale $m";
           /*utilizando outros valores (fornecidos pelo usuário)
           acrescentar ao final da url-> (?a=5&b=8) */
           $n3=$_GET["a"];
           $n4=$_GET["b"];
           echo "<h2>Valores recebidos: $n3 e $n4</h2>";
           $m2=($n3+$n4)/2;
           echo "A soma vale ". ($n3 + $n4);
           echo "<br/>A subtração vale ". ($n3 - $n4);
           echo "<br/>A multiplicação vale ". ($n3 * $n4);
           echo "<br/>A divisão vale ". ($n3 / $n4);
           echo "<br/>O modulo vale ". ($n3 % $n4);
           echo "<br/>A média vale $m2";
        ?>
    </body>
</html>