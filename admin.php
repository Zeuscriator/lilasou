<?php
session_start();
include("config/db.php");
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
?>

<h2>Painel Administrativo</h2>
<a href="logout.php">Sair</a>

<h3>Upload de Foto</h3>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input name="nome" placeholder="Descrição">
    <input type="file" name="foto">
    <button>Enviar</button>
</form>

<h3>Registar Criança</h3>
<form action="salvar_crianca.php" method="post">
    <input name="nome" placeholder="Nome">
    <input name="idade" type="number" placeholder="Idade">
    <select name="sexo">
        <option>Masculino</option>
        <option>Feminino</option>
    </select>
    <input name="responsavel" placeholder="Responsável">
    <input name="contacto" placeholder="Contacto">
    <button>Guardar</button>
</form>

<h3>Lista de Crianças</h3>
<?php
$r = mysqli_query($conn,"SELECT * FROM criancas ORDER BY id DESC");
while($c = mysqli_fetch_assoc($r)){
    echo $c['nome']." - <a href='editar_crianca.php?id=".$c['id']."'>Editar</a> | <a href='apagar_crianca.php?id=".$c['id']."'>Apagar</a><br>";
}
?>

<h3>Doações</h3>
<?php
$d = mysqli_query($conn,"SELECT * FROM doacoes ORDER BY id DESC");
while($row = mysqli_fetch_assoc($d)){
    echo $row['doador']." - ".$row['valor']." MT - ".$row['estado']."<br>";
}
?>
