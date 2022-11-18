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
            $i = 1;
            $soma = 0; 
            while($i<100){
                $soma +=$i;
                $i++;
            }
            printf('<br> Soma = %d', $soma);
            ?>
        </div>
    </body>
</html>