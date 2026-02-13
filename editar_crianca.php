<?php
include("config/db.php");

$id = $_GET['id'];
$r = mysqli_query($conn,"SELECT * FROM criancas WHERE id=$id");
$c = mysqli_fetch_assoc($r);

if($_POST){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $responsavel = $_POST['responsavel'];
    $contacto = $_POST['contacto'];

    mysqli_query($conn,
    "UPDATE criancas SET
        nome='$nome',
        idade='$idade',
        sexo='$sexo',
        responsavel='$responsavel',
        contacto='$contacto'
    WHERE id=$id");

    header("Location: admin.php");
}
?>

<form method="post">
    <input name="nome" value="<?php echo $c['nome']; ?>">
    <input name="idade" value="<?php echo $c['idade']; ?>">
    <input name="sexo" value="<?php echo $c['sexo']; ?>">
    <input name="responsavel" value="<?php echo $c['responsavel']; ?>">
    <input name="contacto" value="<?php echo $c['contacto']; ?>">
    <button>Atualizar</button>
</form>
