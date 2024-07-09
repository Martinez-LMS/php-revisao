<?php

$url = $_GET["url"] ?? null;

if ($url == "feed") {
    header("Location: ./paginas/feed.php");
} elseif ($url == "login") {
    header("Location: ./paginas/login.php");
} elseif ($url == "criar") {
    header("Location: ./paginas/novoUsuario.php");
}
?>