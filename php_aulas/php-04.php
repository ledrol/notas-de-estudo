<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operador unário em PHP</title>                  
    </head>
    <body>
        <?php   //aula video 7            
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "Os valores passados foram $n1 e $n2 </br>";
            $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
            echo "O resultado será $r";
        ?>
    </body>
</html>
