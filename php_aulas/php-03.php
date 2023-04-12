<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operadores de atribuição em PHP</title>                  
    </head>
    <body>
        <?php   //aula video 6            
            $preco = $_GET["p"];
            
            //echo "<h2>Valores recebidos: $v1 e $v2</h2>";
            echo "O preço do produto é R$ " . number_format($preco,2);
            //$preco = $preco + ($preco*10/100);  //Modo usual
            $preco += $preco*10/100;  //Modo resumido
            echo "</br>E o novo preço com 10% de aumento será R$ " . number_format($preco,2);
            //$preco -= $preco*10/100;
            //echo "</br>E o novo preço com 10% de desconto será R$ $preco";
        ?>
    </body>
</html>
