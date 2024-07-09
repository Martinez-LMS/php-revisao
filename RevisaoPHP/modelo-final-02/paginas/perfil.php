<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght@20..48,400..700" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    require_once "../config/banco.php";
    include_once "../config/enviarImagem.php";
    include_once "../Models/Usuario.php";
    include_once "../header.php";

    $codUsuario = $_GET["usr"] ?? null;
    $textoNovoPost = $_POST["textoPost"] ?? null;
    $imagemNovoPost = $_POST["imagemPost"] ?? null;

    if (is_null($codUsuario)) {
        die("Usuário não encontrado.");
    }

    // Verificar se o perfil é do usuário logado
    $permitirNovaPostagem = ($codUsuario == $_SESSION['codUsu']);

    // Processar o envio do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $permitirNovaPostagem) {
        $imagemNovoPost = enviarImagem(); // Função para enviar a imagem e obter o caminho dela
        adicionarPostagem($codUsuario, $textoNovoPost, $imagemNovoPost); // Função para adicionar a postagem ao banco de dados
    }

    // Função para obter os dados do usuário
    $usuario = pegarUsuario($codUsuario);

    ?>

    <main>
        <div style="width: 100%;">

            <div class="single-post-container" style="margin-top: 20px;">
                <?php Usuario:: cartaoUsuario($usuario->Imagem, $usuario-> Nome)?>
            </div>


            <?php if ($permitirNovaPostagem) : ?>
            <div class="single-post-container" style="margin-top: 20px;">
                <h2>Nova Postagem</h2>

                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="textoPost" placeholder="Digite seu texto aqui...">
                    <br><br><input type="file" name="imagemPost">
                    <br><br><button type="submit" class="btn-blue">Publicar</button>
                </form>
            </div>
            <?php endif; ?>

            <h2>Outras Postagens</h2>

            <div class="social-card-container">

                <?php
                // Função para obter as postagens do usuário
                $postagens = pegarPostagens($codUsuario);

                foreach ($postagens as $postagem) {
                    Postagem::gerarPostCard($postagem->cod, $postagem->imagem, $postagem->nome, $postagem->texto_post, $postagem->post_img, $postagem->likes, 0);
                }
                ?>
            </div>
        </div>
    </main>

</body>

</html>