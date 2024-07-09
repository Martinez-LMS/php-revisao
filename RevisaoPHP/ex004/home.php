<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bem-vindo à Página Home</h1>
    <?php if(isset($_SESSION['login'])): ?>
        <p>Olá, <?php echo htmlspecialchars($_SESSION['login']); ?>! Você está logado.</p>
        <form method="post" action="index.php">
            <input type="submit" name="logout" value="Logout">
        </form>
    <?php else: ?>
        <p>Você não está logado. Por favor, faça <a href="index.php">login</a>.</p>
    <?php endif; ?>
</body>
</html>
