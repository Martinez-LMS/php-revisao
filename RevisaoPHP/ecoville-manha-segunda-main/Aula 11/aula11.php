<pre>
<?php 

    $banco = new mysqli("localhost", "root", "", "db_aula_segunda");
    // echo var_dump($banco);


    $busca = $banco->query("SELECT * FROM usuarios");
    var_dump($busca);

    $obj = $busca->fetch_object();
    echo print_r($obj);
    
    echo "<br>" . $obj->usuario;
    echo "<br>" . $obj->nome;
    echo "<br>" . $obj->senha; 

    $busca = $banco->query("SELECT usuario, nome, senha FROM usuarios WHERE usuario = 'zezinho'");
    // var_dump($busca);

    $obj = $busca->fetch_object();
    echo print_r($obj);
    
    echo "<br>" . $obj->usuario;
    echo "<br>" . $obj->nome;
    echo "<br>" . $obj->senha; 


?>
</pre>