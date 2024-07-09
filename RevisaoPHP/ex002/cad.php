<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"];
            $sobrenome  = $_GET["sobrenome"];

            echo "Olá $nome $sobrenome";
        ?>
        <br><br>
        <form action="formulario.php">
            <button type="submit">Início</button>
        </form>
    </main>
</body>
</html>
