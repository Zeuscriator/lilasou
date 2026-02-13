<?php
session_start();
include("config/db.php");

if($_POST){
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $q = mysqli_query($conn,"SELECT * FROM admins WHERE email='$email' AND senha='$senha'");
    if(mysqli_num_rows($q) == 1){
        $_SESSION['admin'] = $email;
        header("Location: admin.php");
    } else {
        $erro = "Credenciais inválidas";
    }
}
?>

<form method="post">
    <input name="email" placeholder="Email">
    <input type="password" name="senha" placeholder="Senha">
    <button>Entrar</button>
</form>

<?php if(isset($erro)) echo $erro; ?>
