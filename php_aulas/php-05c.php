<!DOCTYPE HTML>
<html>
    <head>
        <?php
            $txt = isset($_GET["t"])?$_GET["t"]:"Texto genérico";
            $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
            $cor = isset($_GET["cor"])?$_GET["cor"]:"#0000"
        ?>
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex 3</title>
        <style>
            span.texto {
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>                 
    </head>
    <body>
        <?php   //aula video 8          
            echo "<span class='texto'> $txt</span>";
        ?>
        <a href="php-05c.html">Voltar</a>
    </body>
</html>
