<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        session_start();
                        
        $usu = $_SESSION["usuario"] ?? null;

        if(is_null($usu)){
            // não estou logado
            header("Location: login.php");
        }

        $cod = $_GET["p"] ?? null;
        $nome = $_POST["nome"] ?? null;
        $empresa = $_POST["empresa"] ?? null;

        if(is_null($cod)){
            echo "nenhum produto para editar" ;
            return;
        }

        require_once "banco.php";

        if(is_null($nome) || is_null($empresa)){
            $q = "SELECT nome, empresa FROM smartphone WHERE cod='$cod'";
            $busca = $banco->query($q);
            $obj_smart = $busca->fetch_object();
            $nome = $obj_smart->nome;
            $empresa = $obj_smart->empresa;
        }else{
            updateOnDB("smartphone", "nome='$nome', empresa='$empresa'", "cod='$cod'");
            header("Location: Aula14.php");
        }


        
        

    ?>

    <form action="" method="post">
        <label for="">cod:</label>
        <input type="text" name="cod" value="<?= $cod ?>" disabled>

        <br>
        <label for="">Nome: </label>
        <input type="text" name="nome" placeholder="<?= $nome ?>">

        <br>
        <label for="">Empresa: </label>
        <input type="text" name="empresa" value="<?= $empresa ?>">

        <br>
        <input type="submit" value="Salvar">

    </form>
    

</body>
</html>