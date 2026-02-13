<?php
include("config/db.php");

$doador = $_POST['doador'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];

mysqli_query($conn,
"INSERT INTO doacoes(doador,tipo,descricao,valor)
VALUES('$doador','$tipo','$descricao','$valor')");

header("Location: admin.php");
?>
