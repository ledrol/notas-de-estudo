<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>EX média em PHP</title>                  
    </head>
    <body>
        <?php   //aula video 7c            
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1+$nota2)/2;
            echo "A média entre $nota1 e $nota2 é $m";
            //$sit = ($m<6)?"REPROVADO":"APROVADO"; //Exemplo normal
            //echo "</br>A situação do aluno é $sit";
            echo "</br>A situação do aluno é ".(($m<6)?"REPROVADO":"APROVADO"); //Exemplo concatenado
        ?>
    </body>
</html>
