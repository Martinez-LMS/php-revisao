<!DOCTYPE html>
<html lang="pt-br">
<!-- Ajustei o idioma para português, caso seja apropriado -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght@20..48,400..700" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once "../classes/Postagem.php";
    require_once "../config/banco.php";
    include_once"../header.php"

    session_start();


    $codPostagem = filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT);
    $novoComentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);


    if ($novoComentario) {
        adicionarComentario($codPostagem, $novoComentario);
    }

    // Recuperação dos dados da postagem e comentários
    $post = abrirPostagem($codPostagem);
    $listaComentarios = pegarComentariosDePostagem($codPostagem);
    ?>

    <main>
        <div style="width: 100%;">

            <div class="single-post-container">
                <?php
                if ($post) {
                    Postagem::mostrarPostUnico(
                        $codPostagem,
                        $post->imagem,
                        $post->nome,
                        $post->cod_usuario,
                        $post->texto_post,
                        $post->post_img,
                        $post->likes,
                        count($listaComentarios)
                    );
                } else {
                    echo "<p>Postagem não encontrada.</p>";
                }
                ?>
            </div>

            <div class="single-post-container" style="margin-top: 20px;">

                <?php
                Postagem::carregarComentarios($listaComentarios);
                
                ?>
                    

                <form action="" method="post">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                    <input type="text" name="comentario" required placeholder="Digite seu comentário">
                    <button type="submit" class="btn-blue">Comentar</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>