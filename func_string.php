<html>
    <head>
        <meta charset="utf-8" />
        <title>funcao string</title>
    </head>

    <body>
        <?php

            $texto = 'Curso De PHP';

            echo $texto;
            echo '<br>';
            
            //string to lower 
            echo '<br>';
            echo strtolower($texto);
            echo '<br>';

            //string to toupper 
            echo '<br>';
            echo strtoupper($texto);
            echo '<br>';
    
            //upper case first
            echo '<br>';
            echo ucfirst($texto);
            echo '<br>';

            //string length
            echo '<br>';
            echo strlen($texto);
            echo '<br>';

            //string replace
            echo '<br>';
            echo str_replace('Curso', 'Estudo', $texto );
            echo '<br>';

            //string cut out
            echo '<br>';
            echo substr($texto, 0, 5);
            echo '<br>'

           ?>


    </body>
</html>