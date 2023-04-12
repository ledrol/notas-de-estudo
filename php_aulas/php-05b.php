<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex 2</title>                  
    </head>
    <body>
        <?php   //aula video 8          
            //'isset': se foi configurado  [Se usa p/ não gerar erro pela falta de parâmetro]
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
            $ano = isset($_GET["ano"])?$_GET["ano"]:0;
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
            //echo "O valor enviado foi $valor";
            $idade = date("Y") - $ano;
            echo "$nome e $sexo e tem $idade anos. ";
        ?>
        <a href="php-05b.html">Voltar</a>
    </body>
</html>
