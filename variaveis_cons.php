<html>
    <head>
        <meta charset="utf-8" />
        <title>Variaveis constantes</title>
    </head>

    <body>
        <?php

            //variaveis constantes não podem ser modificadas depois de criadas
            define('BD_URL','undereco_bd_dev');
            define('BD_USUARIO','usuario_bd_dev');
            define('BD_SENHA','senha_bd_dev');
       
            echo BD_URL . '<br/>';
            echo BD_USUARIO . '<br/>';
            echo BD_SENHA . '<br/>';

        ?>
    </body>
</html>