<!--Exercício do vídeo 13-->
<!DOCTYPE HTML>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Integrar HTML em PHP Ex </title>                      
    </head>
    <body>
        <div>  
        <form action="php-10bb2.php" method="get">
        Número:            
            <select name="val" id="">          
            <?php //Exercício tabuada [do vídeo]
               for ($i=0; $i <=10 ; $i++) { 
               echo "<option>$i</option>";
               }               
            ?> 
            </select>
            <input type="submit" value="Tabuada">
        </div>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <!--O javascript significa: Volte 1 página no histórico de navegação -->
    </body>
</html>
