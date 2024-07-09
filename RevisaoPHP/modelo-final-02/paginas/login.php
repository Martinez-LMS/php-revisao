<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Perfil</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght@20..48,400..700" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
require_once "../config/banco.php"; // Config banco para usar o banco

$usuario = $_POST["usuario"] ?? null;
$senha = $_POST["senha"] ?? null;

if (!is_null($usuario) && !is_null($senha)) {
    if (fazerLogin($usuario, $senha)) {
        header("Location: feed.php");
        exit; // Importante sair do script após redirecionamento
    } else {
        echo "Usuário ou senha inválidos.";
    }
} else {
    echo "Usuário ou senha não foram fornecidos.";
}

    echo password_hash("123", PASSWORD_DEFAULT);
?>


    <nav class="navbar">
        <a href="./feed.php"><button class="nav-button btn-secondary">Feed</button></a>
        <a href="./novoUsuario.php"><button class="nav-button btn-dark">New User</button></a>
    </nav>

    <main>
        <div style="width: 100%;">

            <div class="single-post-container" style="margin-top: 20px;">
                <h2>Fazer Login</h2>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="usuario">Usuário:</label>
                    <input type="text" id="usuario" name="usuario" class="input-button">

                    <br><br><label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" class="input-button">

                    <br><br><button type="submit" class="btn-blue" name="login">Login</button>
                </form>
            </div>

        </div>
    </main>

   

</body>

</html>