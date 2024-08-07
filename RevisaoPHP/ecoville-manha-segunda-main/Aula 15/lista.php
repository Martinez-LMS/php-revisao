<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>

    <?php require_once "header.php"; ?>

    <h1>Lista de Tarefas:</h1>

    <?php 
        session_start();
        // echo var_dump($_SESSION);
        $usuario = $_SESSION['usuario'] ?? null;
        $cod_usuario = $_SESSION['cod_usuario'] ?? null;

        // require_once "banco-antigo.php";
        require_once "banco.php";
        require_once "./Model/Lista.php";
        $modelLista = new Lista();

        $novaTarefa = $_POST['tarefa'] ?? null;
        if(!is_null($novaTarefa) && !is_null($cod_usuario)){
            $modelLista->criarTarefa($novaTarefa, $cod_usuario);
        }

        if(is_null($cod_usuario)){
            // nao logado
            $busca = $modelLista->pegarTarefas();
        }else{
            // logado
            $busca = $modelLista->pegarTarefaDeUsuario($cod_usuario);
        }

        // echo print_r($busca);
        
        while($obj_lista = $busca->fetch_object()){
            // echo print_r($obj_lista);
            if(is_null($cod_usuario)){ 
                echo "<br> - $obj_lista->tarefa [usuario: $obj_lista->cod_usuario]";
            }else {
                echo "<br> - $obj_lista->tarefa";
            }
        }
    
    ?>

    <hr>
    <h1>Adicionar Tarefa:</h1>
    <form action="" method="post">
        <input type="text" name="tarefa" id="">
        <input type="submit" value="Adicionar">
    </form>

    
</body>
</html>