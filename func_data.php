<html>
    <head>
        <meta charset="utf-8" />
        <title>funcao data</title>
    </head>

    <body>
        <?php

            $data_ini = '2022-04-25';
            $data_fin = '2023-02-21';

            $time_ini = strtotime($data_ini);
            
            //recupera data atual 
            echo '<br>';
            echo date('d/m/y h:i');
            echo '<br>';

            //recuperar timezone default da aplicação 
            echo '<br>';
            echo date_default_timezone_get();
            echo '<br>';
    
            //atualiza timezone default da aplicação 
            echo '<br>';
            date_default_timezone_set('America/Sao_Paulo');
            echo '<br>';

           ?>


    </body>
</html>