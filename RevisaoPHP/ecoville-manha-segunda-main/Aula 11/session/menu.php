<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        require_once "usuarios.php";
        session_start();
        // echo session_id();

        $usuario = $_POST['usuario'] ?? null;
        $senha = $_POST['senha'] ?? null;

        if(isset($_SESSION['user'])){
            echo "ja fez login";
            $usuario = $_SESSION['user'];
            echo "<h2>Bem Vindo.... {$usuario}</h2>";
        }else{

            if(!is_null($usuario) && !is_null($senha)){
                // echo $usuario . " -- " . $senha;
    
                if(verUsuarios($usuario, $senha)){
                    echo "<br> - Fazendo Login";
                    echo "<h2>Bem Vindo....</h2>";
                    $_SESSION['user'] = $usuario;
                }else{
                    echo "<br> - Tente Novamente";
                    require_once "form-login.php";    
                }
                
            }else{
                require_once "form-login.php";
            }

        }
    
        
        
        

        
    ?>


</body>
</html>