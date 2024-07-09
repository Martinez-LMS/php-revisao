<?php
session_start();

require_once "..Models/Usuario.php";
$nome = $_SESSION['nome']?? null;
$nome = $_SESSION['imagem']?? null;

Usuario:: cartaoUsuario( $img, $nome);

function estaLogado()
{
    return isset($_SESSION['usuario']);
}

function obterNomeUsuario()
{
    return isset($_SESSION['nome']) ? $_SESSION['nome'] : '';
}

function obterIdUsuario()
{
    return isset($_SESSION['usuario']) ? $_SESSION['usuario'] : '';
}

?>

<nav class="navbar">
    <a href="./feed.php"><button class="nav-button btn-secondary">Feed</button></a>

    <?php if (estaLogado()) : ?>
        <a href="./perfil.php?usr=<?= obterIdUsuario() ?>"><button class="nav-button btn-secondary">Meu Perfil</button></a>
        <a href="./logout.php"><button class="nav-button btn-red">Logout</button></a>
    <?php else : ?>
        <a href="./login.php"><button class="nav-button btn-success">Login</button></a>
        <a href="./novoUsuario.php"><button class="nav-button btn-dark">Criar Usuário</button></a>
    <?php endif; ?>

    <?php if (estaLogado()) : ?>
        <div class="user-info">
            <span><?= obterNomeUsuario() ?></span>
            <!-- Exemplo de exibição de foto de perfil -->
            <img src="../images/profile/default.jpg" alt="Foto de Perfil">
        </div>
    <?php endif; ?>
</nav>