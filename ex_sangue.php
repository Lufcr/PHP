<html>
    <head>
        <meta charset="utf-8" />
        <title>Doação de sangue</title>
    </head>

    <body>
        <?php

            $idade = 15;
            $peso = 75;
            $atende_requisitos = false;

            if ($idade <= 69 AND $idade >= 16 AND $peso >= 50){
                $atende_requisitos = true;
            }

            
        ?>

        <h1>Perfil do Doador</h1>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p><?= $atende_requisitos ? 'Atende os requisitos' : 'Não atende os requisitos'; ?></p>


    </body>
</html>