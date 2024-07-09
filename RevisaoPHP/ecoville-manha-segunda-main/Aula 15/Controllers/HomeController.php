<?php 

    class HomeController {

        function __construct() {
            
        }
        
        function index(){
            echo "<br>[HomeController] index()";
            
            $dados = ["titulo" => "TESTE MUITO LEGAL"];
            $this->carregarView("testeFeliz", $dados);
        }

        function carregarView($nomeView, $dadosView){
            extract($dadosView);

            $arquivo = "./$nomeView.php";

            if(file_exists($arquivo)){
                require_once $arquivo;
            }else{
                die("Erro no arquivo -> $arquivo");
            }

        }

    }

?>