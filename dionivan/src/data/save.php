<?php

use Database\Database;
//cod


if (isset($_POST['cod'])){
    $cod = $_POST['cod'];
}else{
    $cod = null;
}

//ingredientes
if (isset($_POST['ingredientes'])){
    $ingredientes = $_POST['ingredientes'];
}else{
    $ingredientes = null;
}

//qtde
if (isset($_POST['qtde'])){
    $qtde = $_POST['qtde'];
}else{
    $qtde = null;
}

//pgto
if (isset($_POST['pgto'])){
    $pgto = $_POST['pgto'];
}else{
    $pgto = null;
}

//entrega
if (isset($_POST['entrega'])){
    $entrega = $_POST['entrega'];
}else{
    $entrega = null;
}
 require_once "../model/Database.php";
$db = new Database();
$db->update(
    "UPDATE pedidos SET igredientes = '$ingredientes',
     qtde = $qtde, pgto='$pgto', entrega = '$entrega' WHERE cod = $cod;"
);

?>