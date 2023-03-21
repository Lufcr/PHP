<html>
    <head>
        <meta charset="utf-8" />
        <title>If e Else 2</title>
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
        <?php 
        if ($usuario_cartao){
            echo 'Sim';
        } else {
            echo 'Não';
        }
        ?>
        </p>

        <p>Valor da compra: <?= $valor_compra ?> </p>
        
        <p>Recebeu desconto do frete?
        <?php 
        if ($recebe_desconto){
            echo 'Sim';
        } else {
            echo 'Não';
        }
        ?>
        </p>

        <p>Valor frete: <?= $frete ?></p>


    </body>
</html>