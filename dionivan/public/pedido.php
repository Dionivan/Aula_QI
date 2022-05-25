<?php

use Database\Database;
use Model\Pedido;


require_once "../src/model/Pedido.php";

$pedido = new Pedido();

//var_dump($produto->darOi() );

//se está setado (informado/enviado/criado/existe)
//via GET o campo com 'name' ingrediente, então

    if(isset($_GET['ingrediente'])) {
           //A variável '$ingrediente' (criada neste momento) receberá justamente
        //o valor que foi enviado via GET do campo ingrediente.
        $pedido->ingredientes = $_GET['ingrediente'];
    } else {
             //Senão (do contrário) a mesma variável $ingrediente será 'null'
             $pedido->ingredientes = null;
    }

    if(isset($_GET['qtde'])) {
        $pedido->qtde = $_GET['qtde'];
    } else {
        $pedido->qtde = null;
    }
    if(isset($_GET['pgto'])) {
        $pedido->pgto = $_GET['pgto'];
    } else {
        $pedido->pgto = null;
    }

    if(isset($_GET['entrega'])) {
            $pedido->entrega = $_GET['entrega'];
        } else {
            $pedido->entrega = null;
        }

  //criando a variavel para receber a lista de ingredientes
  $listaItens = null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista do pedido</title>
</head>
<body>

    <?= $pedido->darDesconto() ?>



    <?php foreach($pedido->ingredientes as $i) : ?>
        <h3 style="font-family:  courier;"> 
            <?php 
                echo $i;
                $listaItens .= $i . ', ';
            ?> </h3>
        <hr>
    <?php endforeach ?>
    <h2>Qauntidade:</h2>

    <h3 style="font-family:  courier;">
    <?= $pedido->qtde ?> <hr> </h3>

    <h2>Pagamento:</h2>
    <h3 style="font-family:  courier;">
    <?= $pedido->pgto ?> <hr> </h3>

    <h2>Entrega:</h2>
    <h3 style="font-family:  courier;">
    <?= $pedido->entrega ?> <hr> </h3>

    <?php
    ///////////////////////////////////
        require_once "../src/model/Database.php";
        $db = new Database();
        
        $db-> insert(
            "INSERT INTO pedidos(data_hora, ingredientes, qtde, pgto, entrega)
            VALUES ('$pedido->dataHora' , '$listaItens' , '$pedido->qtde' , '$pedido->pgto' , '$pedido->entrega')"
        );

    ///////////////////////////////////
    ?>
    
</body>
</html>