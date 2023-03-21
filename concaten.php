<html>
    <head>
        <meta charset="utf-8" />
        <title>Variaveis</title>
    </head>

    <body>
        <?php

            $nome = 'Luis  Felipe';
            $idade = 20;
            $ativ = 'esportes';

            //operador .
            echo 'Olá '.$nome.', vejo q tem '.$idade.' anos e gosta de '.$ativ.'';
  
            echo '<br>';

            //aspas duplas não exigem o uso de aspas simples e ponto para concatenação
            echo "Olá $nome, vejo q tem $idade anos e gosta de $ativ"

        ?>
    </body>
</html>