<?php
include("config/db.php");
mysqli_query($conn,"DELETE FROM criancas WHERE id=".$_GET['id']);
header("Location: admin.php");
?>
