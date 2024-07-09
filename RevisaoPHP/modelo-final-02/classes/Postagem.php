<?php

require_once "Usuario.php";

class Postagem
{

    public static function gerarPostCard($codPost, $userPic, $userName, $postText, $postImg, $postLike, $postComent)
    {
        echo '<div class="social-card">';
        echo '<div class="social-card-user-info">';
        echo '<a href="./verPost.php? cod= ' . $codPost. '">';
        echo '<img src="' . $userPic . '" style="width: 40px">';
        echo '<h4>' . $userName . '</h4>';
        echo '</div>';
        
        echo '<div class="social-card-content">';
        echo '<p class="social-card-text">' . $postText . '</p>';
        echo '<img src="../images/posts/' . $postImg . '" alt="Imagem da postagem">';
        echo '<hr>';
        echo '<span class="material-symbols-outlined">favorite</span> ' . $postLike;
        echo '<span class="material-symbols-outlined">chat_bubble</span> ' . $postComent;
        echo '</div>';
        
        echo '</div>';
    }

    public static function mostrarPostUnico($codPost, $userPic, $userName, $codUser, $postText, $postImg, $postLike, $postComent)
    {
        echo '<a href="../paginas/perfil.php?usr=' . $codUser . '">';
        echo Usuario::cartaoUsuario($userPic, $userName);
        echo '</a>';

        echo '<div class="social-card-content post">';
        echo '<p class="social-card-text">' . $postText . '</p>';
        echo '<img src="../images/posts/' . $postImg . '" alt="Imagem da postagem">';
        echo '<hr>';
        echo '<span class="material-symbols-outlined">favorite</span> ' . $postLike;
        echo '<span class="material-symbols-outlined">chat_bubble</span> ' . $postComent;

        if (isset($_SESSION["nome"])) {
            echo '<a href="../paginas/apagar.php?tipo=p&cod=' . $codPost . '"><span class="material-symbols-outlined" style="color: red;"> delete </span></a>';
        }

        echo '</div>';
    }

    public static function carregarComentarios($listaComentarios)
    {
        echo '<div class="single-post-container">';
        echo '<h4>Comentários</h4>';
        echo '<br>';

        foreach ($listaComentarios as $comentario) {
            echo '<p>';
            if (isset($_SESSION['usu'])) {
                echo '<a href="../paginas/apagar.php?tipo=c&cod=' . $listaComentarios[$i] -> cod_comentario.'">span class"material-symbols-outlined" ';
                
            }
            echo $listaComentarios[$i] -> comentario;
            echo '</p> <hr>';
        }

        echo '</div>';
    }
}

?>
