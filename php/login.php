<?php
// Autenticação estática
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == 'adm' && $_POST['password'] == '123') {
        $_SESSION['logged_in'] = true;
        header("Location: home.php");
    } else {
        echo "<script>alert('Credenciais inválidas');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Usuário" required><br><br>
        <input type="password" name="password" placeholder="Senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
