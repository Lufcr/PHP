<html>
    <head>
        <meta charset="utf-8" />
        <title>Variaveis</title>
    </head>

    <body>
        <?php
        
            //string
            $nome = 'Luis Felipe';

            //Int
            $idade = 19;

            //Float
            $peso = 84.2;

            //boolean
            $fuma_sn = false; //true ou false = vazio

            //é possivel alterar o valores e tipos da variavel mais a frente no codigo

        ?>

        <h1>Ficha</h1>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?> anos</p>
        <p>Peso: <?= $peso ?>kg</p>
        <p>Fumante: <?= $fuma_sn ?></p>

    </body>
</html>