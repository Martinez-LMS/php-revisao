<pre>
<?php 

    $banco = new mysqli("localhost", "root", "", "db_aula_segunda");


    function buscarUsuario($usuario){
        global $banco;

        $q = "SELECT usuario, nome, senha FROM usuarios WHERE usuario='$usuario'";

        $busca = $banco->query($q);
        // echo var_dump($busca);

        return $busca;
    }



    /*
    $busca = $banco->query("SELECT * FROM usuarios");
    echo var_dump($busca);
    echo "<br>---------------------<br>";
    
    $obj = $busca->fetch_object();
    echo var_dump($obj);
    
    echo "<br>---------------------<br>";
    
    while($obj = $busca->fetch_object()){
        echo var_dump($obj);
    }
    
    echo "<br>---------------------<br>";
    $busca = $banco->query("SELECT usuario, nome, senha 
    FROM usuarios WHERE usuario='zezinho'");

    echo var_dump($busca);
    
    $obj = $busca->fetch_object();
    echo "<br>" . $obj->usuario;
    echo "<br>" . $obj->nome;
    echo "<br>" . $obj->senha;
    */


    // $senhaNova = password_hash("122", PASSWORD_DEFAULT);
    /*$q = "UPDATE usuarios SET senha='$senhaNova' WHERE usuario='pedroca'";
    $resp = $banco->query($q);
    echo "Query: $q";
    echo var_dump($resp);*/

    /*
    $q = "DELETE FROM usuarios WHERE usuario='pedroca'";
    $resp = $banco->query($q);
    echo "Query: $q";
    echo var_dump($resp);
    */

    function createOnDB($into, $values){
        global $banco;

        $q = "INSERT INTO $into VALUES $values";
        
        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);
    }
    

    function criarUsuario($usuario, $nome, $senha){
        global $banco;

        // $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, 'pedroca', 'pedro', '122')";

        $senha = password_hash($senha, PASSWORD_DEFAULT);
        // createOnDB("usuarios(cod, usuario, nome, senha)", "(NULL, '$usuario', '$nome', '$senha')");

        $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";
        
        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);
    }
    
    criarUsuario("zezinho", "arthur", "senha47");
    criarUsuario("joaozinho", "joao", "AbC1");


?>
</pre>