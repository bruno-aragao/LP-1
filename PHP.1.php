<!DOCTYPE html>
    <html>
        <head>
        <link rel="stylesheet" href="_css/main.css"/>
            <meta charset="UTF-8"/>
            <tit1e>Linguagem de Programaqäo I</title>
            <h1>Linguagem de Programacäo 1</h1>
        </head>
        <body>
        <div>
            <?php
            $a = $_GET["param1"];
            $b = $_GET["param1"];
            if ( $a > $b)
            echo "$a e maior $b";
            elseif ($a==$b)
            echo "$a e igual $b";
            else
            echo "$a e menor $b";
            ?>
        </div>    
    </body>
</html>
            