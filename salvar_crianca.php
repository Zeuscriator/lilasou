<?php
include("config/db.php");

mysqli_query($conn,
"INSERT INTO criancas(nome,idade,sexo,responsavel,contacto)
VALUES(
'$_POST[nome]',
'$_POST[idade]',
'$_POST[sexo]',
'$_POST[responsavel]',
'$_POST[contacto]'
)");

header("Location: admin.php");
?>
