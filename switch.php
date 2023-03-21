<html>
    <head>
        <meta charset="utf-8" />
        <title>Switch case</title>
    </head>

    <body>
        <?php

        $valor = 1;

        //pode responder por qualquer tipo de variavel
        switch ($valor) {
            case 1:
                echo 'ta pobre';
                break;
            case 2:
                echo 'ta medio';
                break;
            case 3:
                echo 'ta rico';
                break;
            default:
                echo 'tem nada crlh';
                break;
        }

            
        ?>


    </body>
</html>