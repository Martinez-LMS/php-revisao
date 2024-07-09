<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght@20..48,400..700" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    require_once "../config/enviarImagem.php";
    require_once "../config/banco.php";
    session_start();

    $usuario = $_SESSION['usu'] ?? null;

    // Verifica se usuário já está logado
    if (!is_null($usuario)) {
        header("Location: ./feed.php");
        exit;
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = $_POST["usuario"] ?? null;
        $senha = $_POST["nome"] ?? null;
        $senha = $_POST["senha"] ?? null;

        $imagemNovoUsuario = enviarImagem("profile"); 
        novoUsuario($usuario, $nome, $senha, $imagemNovoUsuario);
    }
    ?>

    <nav class="navbar">
        <a href="./feed.php"><button class="nav-button btn-secondary">Feed</button></a>
        <a href="./login.php"><button class="nav-button btn-secondary">Login</button></a>
    </nav>

    <main>
        <div style="width: 100%;">

            <div class="single-post-container" style="margin-top: 20px;">
                <h2>Criar Usuário</h2>

                <form action="" method="post" enctype="multipart/form-data">
                    <label for="usuario">Usuário:</label>
                    <input type="text" name="usuario" id="usuario" class="input-button">

                    <br><br><label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="input-button">

                    <br><br><label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" class="input-button">

                    <br><br><label for="imagemPost">Imagem:</label>
                    <input type="file" name="imagemPost" id="imagemPost">

                    <br><br><button type="submit" class="btn-blue">Criar</button>
                </form>
            </div>

        </div>
    </main>

</body>

</html>