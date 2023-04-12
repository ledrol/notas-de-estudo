<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funções aritméticas em PHP</title>
        <style>
            h2 {
                font: 15pt arial;
                color: #003A6C;
                font-weight:bold;
            }
        </style>          
    </head>
    <body>
        <?php   //aula video 5b            
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<h2>Valores recebidos: $v1 e $v2</h2>";
            echo "O valor absoluto de $v2 é ".abs($v2);
            echo "</br>O valor de $v1<sup>$v2</sup> é ".pow($v1,$v2);
            echo "</br>A raiz de $v1 é ".sqrt($v1);
            echo "</br>O valor de $v2 arredondado é ". round($v2); //'ceil'arredonda p/ cima e 'floor'arredonda p/ baixo
            echo "</br>A parte inteira de $v2 é " . intval($v2);
            echo "</br>O valor de $v1 em moeda é R$ " . number_format($v1,2,",",".");
        ?>
    </body>
</html>
