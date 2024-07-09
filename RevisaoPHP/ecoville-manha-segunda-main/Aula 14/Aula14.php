<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefones</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
        </style>
</head>
<body>
    
    <h1>SMARTPHONES</h1>

    <pre>
    <?php 

        session_start();
                
        $usu = $_SESSION["usuario"] ?? null;

        if(is_null($usu)){
            // não estou logado
            header("Location: login.php");
        }

        require_once "banco.php";

        // $q = "SELECT * FROM smartphone";
        // $q = "SELECT * FROM empresa";
        $q = "SELECT s.cod, s.nome AS smartNome, e.nome AS empresa 
        FROM smartphone s JOIN empresa e ON s.empresa = e.cod";

        $busca = $banco->query($q);
        echo print_r($busca);

        // $obj_smartphone = $busca->fetch_object();
        // echo print_r($obj_smartphone);
    
    ?>
    </pre>


    <table style="width: 50%;">
    <tr>
        <th>COD</th>
        <th>NOME</th>
        <th>EMPRESA</th>
        <th></th>
    </tr>
    
    <?php 
        while ($obj_smartphone = $busca->fetch_object()) { 
            echo "<tr>";
            //echo print_r($obj_smartphone);
            echo "<td>$obj_smartphone->cod</td>";
            echo "<td>$obj_smartphone->smartNome</td>";
            echo "<td>". $obj_smartphone->empresa ."</td>";
            echo "<td><a href=\"editar.php?p=" . $obj_smartphone->cod . "\">editar</a> </td>";
            echo "</tr>";
        }
    ?>

    </table>


</body>
</html>