<?php 

    class Rotas{

        public $controller = "HomeController";
        public $funcao = "index";
        public $parametros = array();

        function __construct() {
            $url = $this->getUrl();

            if(is_null($url)){
                // home
            }else{
                // Procurar o Controller /user/ --> UserController
                $nomeClasse = ucfirst($url[0]) . "Controller";
                $filePath = "./Controllers/$nomeClasse.php";

                if(file_exists($filePath)){
                    echo "existe";
                    $this->controller = $nomeClasse;
                    array_shift($url);
                }
                
                // Procurar Funcao
                if(isset($url[0]) && !empty($url[0])){
                    $this->funcao = $url[0];
                    array_shift($url);
                }

                // Procurar Parametros
                if(count($url) > 0){    
                    $this->parametros = $url;
                }

            }

            require_once "./Controllers/$this->controller.php";
            $this->controller = new $this->controller;
            // $varObj = new ListaController;
            call_user_func_array([$this->controller, $this->funcao], $this->parametros);
        }

        function getUrl(){

            // http://localhost/aulaphp-segunda/aula15/lista.php
            // lista.php?var=10
            // lista/produtos/50

            $url = $_GET["url"] ?? null;

            if(is_null($url)){
                return null;
            }else{
                // lista/produtos/50
                // controller / funcao / parametros
                $url_nova = explode("/", $url);
                // echo var_dump($url_nova);
                return $url_nova;
            }

            return null;

        }

    }


?>