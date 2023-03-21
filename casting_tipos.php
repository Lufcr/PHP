<html>
    <head>
        <meta charset="utf-8" />
        <title>Casting tipos</title>
    </head>

    <body>
        <?php

        //gettype() => retorna o tipo da variavel
        $valor = 10;
        $valor2 = (float) $valor;
        $valor3 = (string) $valor;

        echo $valor .' '. gettype($valor) ;
        echo '<br>';
        echo $valor2 .' '. gettype($valor2);
        echo '<br>';
        echo $valor3 .' '. gettype($valor3);
    
        ?>


    </body>
</html>