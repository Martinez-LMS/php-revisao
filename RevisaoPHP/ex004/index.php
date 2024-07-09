<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
    if(!isset($_SESSION['login'])) {
        if(isset($_POST['acao'])) {
            $login = 'leo';
            $senha = '1234';

            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];

            if($login == $loginForm && $senha == $senhaForm) {
                $_SESSION['login'] = $login;

                header('Location: home.php');
                exit;
            } else {
                echo '<p>Login ou senha incorretos</p>';
            }
        }
    } else {
        include 'home.php';
    }

    // Verifica se o botão de logout foi clicado
    if(isset($_POST['logout'])) {
        session_destroy();  // Encerra a sessão
        header('Location: index.php');  // Redireciona para a página de login
        exit;
    }
    ?>

    <?php if(!isset($_SESSION['login'])): ?>
    <form method="post" action="">
        <input type="text" name="login" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="submit" name="acao" value="Enviar">
    </form>
    <?php else: ?>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['login']); ?>!</p>
    <form method="post" action="">
        <input type="submit" name="logout" value="Logout">
    </form>
    <?php endif; ?>
</body>
</html>
