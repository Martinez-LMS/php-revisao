<!DOCTYPE html>
<html>
<head>
    <title>Formulário em PHP</title>
</head>
<body>
    <h1>Formulário em PHP</h1>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>
        
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" required><br><br>
        
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        echo "<h2>Dados Recebidos:</h2>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Sobrenome: $sobrenome</p>";
    }
    ?>
</body>
</html>