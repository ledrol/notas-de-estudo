<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex </title>                      
    </head>
    <body>
        <?php   //aula video 9  
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e terá $i anos.</br>";
            /* Condicional simples:
            if ($i >=18) {
                $v = "Já pode votar";
                $d = "Já pode dirigir";
            } else {
                $v = "Não pode votar";
                $d = "Não pode dirigir";
            }
            echo "Com essa idade, você $v e também $d";
            */
            /*  Condicional aninhado:
            if ($i < 16) {
                $tipovoto = "Não vota";
            } else {
                if (($i >= 16 && $i < 18) || ($i>65)) {
                    $tipovoto = "Voto opcional";
                } else {
                    $tipovoto = "Voto obrigatório";
                }
                
            }
            */
            //Agora usando 'elseif':
            if ($i < 16) {
                $tipovoto = "Não vota";
            } elseif (($i >= 16 && $i < 18) || ($i>65)) {
                    $tipovoto = "Voto opcional";
                } else {
                     $tipovoto = "Voto obrigatório";
                }
            echo "Para essa idade, $tipovoto";
        ?>
        <a href="php-06.html">Voltar</a>
    </body>
</html>
