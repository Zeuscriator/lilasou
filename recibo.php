<?php
require_once("tcpdf/tcpdf.php");
include("config/db.php");

$ref = $_GET['ref'];
$r = mysqli_query($conn,"SELECT * FROM doacoes WHERE referencia='$ref'");
$d = mysqli_fetch_assoc($r);

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->writeHTML("
<h2>RECIBO CHAMPIOS</h2>
<p>Doador: {$d['doador']}</p>
<p>Valor: {$d['valor']} MT</p>
<p>Referência: {$d['referencia']}</p>
<p>Data: {$d['data_doacao']}</p>
");
$pdf->Output();
?>
