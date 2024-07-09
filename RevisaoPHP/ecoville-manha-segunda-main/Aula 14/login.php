<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    
    <h1>LOGIN</h1>
    <?php 
        
        session_start();
        
        $usu = $_SESSION["usuario"] ?? null;

        if(!is_null($usu)){
            // estou logado
            header("Location: Aula14.php");
        }else{

            require_once "banco.php";

            $usu = $_POST['usuario'] ?? null;
            $sen = $_POST['senha'] ?? null;

            if(is_null($usu) || is_null($sen)){
                require_once "form-login.php";
            }else{
                require_once "form-login.php"; // para testes

                echo "~ [Usuario: $usu - Senha: $sen] ~ <br>";

                $busca = buscarUsuario($usu);

                if($busca->num_rows == 0){
                    echo "<br> Usuário não existe";
                }else{
                    echo "<br> boa";
                    
                    $obj = $busca->fetch_object();
                    echo "<br>" . $obj->usuario;
                    echo "<br>" . $obj->nome;
                    echo "<br>" . $obj->senha;

                    // if($sen === $obj->senha){
                    if(password_verify($sen, $obj->senha)){
                        echo "<br> sucesso!";
                        $_SESSION["usuario"] = $usu;
                        header("Location: Aula14.php");
                    }else{
                        echo "<br> sem sucesso :/";
                    }

                }

                
            }
            // ["usu" => "zezinho", "senha" => "senha47"],
            // echo "<br>".  password_hash("senha47", PASSWORD_DEFAULT);
      }
    ?>

</body>
</html>