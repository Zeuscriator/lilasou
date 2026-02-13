<?php
include("config/db.php");

$doador = $_POST['doador'];
$valor = $_POST['valor'];
$metodo = $_POST['metodo'];
$telefone = $_POST['telefone'];

$ref = uniqid("CHP");

mysqli_query($conn,
"INSERT INTO doacoes(doador,tipo,valor,referencia,estado)
VALUES('$doador','Financeira','$valor','$ref','Pago')");

header("Location: recibo.php?ref=$ref");
?>
