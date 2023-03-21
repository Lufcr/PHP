<html>
    <head>
        <meta charset="utf-8" />
        <title>imposto de renda</title>
    </head>

    <body>
        <?php

        $salario = 100000;

        function imposto_de_renda($salario)
        {
            if ($salario <= 1903) {
                $pagar = 0;
            } else if ($salario > 1903 AND $salario <= 2800) {
                $pagar = $salario * 0.075;
            } else if ($salario > 2800 AND $salario <= 3700) {
                $pagar = $salario * 0.15;
            } else if ($salario > 3700 AND $salario <= 4600) {
                $pagar = $salario * 0.225;
            } else if ($salario > 4600) {
                $pagar = $salario * 0.275;
            }
            return $pagar;
        }
        
        echo 'Valor imposto de renda: ';
        echo imposto_de_renda($salario);

           ?>


    </body>
</html>