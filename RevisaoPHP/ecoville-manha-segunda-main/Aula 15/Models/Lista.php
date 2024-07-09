<?php 


    class Lista {


        public function __construct() {
            
        }

        function criarTarefa(string $tarefa, int $codUsuario){
            $q = "INSERT INTO tarefas(cod, tarefa, cod_usuario) VALUES (NULL, '$tarefa', '$codUsuario')";
            Banco::query($q);
        }

        function pegarTarefas(){
            $q = "SELECT * FROM tarefas";
            return Banco::query($q);
        }

        function pegarTarefaDeUsuario(int $codUsuario){ 
            $q = "SELECT * FROM tarefas WHERE cod_usuario='$codUsuario'";
            return Banco::query($q);
        }

    }


?>