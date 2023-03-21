<html>
    <head>
        <meta charset="utf-8" />
        <title>Operadores ternarios</title>
    </head>

    <body>
        <?php

            $usuario_cartao = true;
            $valor_compra = 350;

            $frete = 50;
            $recebe_desconto = true;
        
            if ($usuario_cartao AND $valor_compra >= 400){
                $frete = 0;
            } else if ($usuario_cartao AND $valor_compra >= 200){
                $frete = 25;
            } else if ($usuario_cartao AND $valor_compra >= 100){
                $frete = 37;
            }else{
                $recebe_desconto = false;
            }
        ?>

        <h1>Detalhes do pedido</h1>
        
        <p>Possui cartão da loja? 
            <?=  $usuario_cartao ? 'Sim' : 'Não'; ?>
        </p>

        <p>Valor da compra: <?= $valor_compra ?> </p>
        
        <p>Recebeu desconto do frete?
        <?= $recebe_desconto ? 'Sim' : 'Não'; ?>
        </p>

        <p>Valor frete: <?= $frete ?></p>


    </body>
</html>