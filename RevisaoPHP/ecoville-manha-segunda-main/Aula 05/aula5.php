<?php 

    declare(strict_types=1);

    
    function nomeBonito(){
        echo "Testando minha funcao bonita";
    }

    function criaTitulo($texto){
        echo "<h1>{$texto}</h1>";
    }

    function tituloLegal($texto){
        echo "<h2>##############</h2>";
        echo "<h2>## {$texto} ##</h2>";
        echo "<h2>##############</h2>";
    }

    // nomeBonito();
    criaTitulo("Titulo Aula 5 - Funcoes");
    criaTitulo(76876789);


    tituloLegal("Calculando Medias");
    function calcularMedia($nome, $nota1, $nota2){
        $media = ($nota1 + $nota2) / 2;

        if($media >= 7){
            echo "<p>O Aluno(a) {$nome} foi aprovado com média {$media}.</p>";
        }else{
            echo "<p>O Aluno(a) {$nome} foi reprovado com média... melhor não saber. ({$media})</p>";
        }

    }

    calcularMedia("Artur", 3.5, 7.0);
    calcularMedia("Felipe", "6.5", "7.0");
    // calcularMedia("Gustavo", "6a", "7u");

    function somar($num1, $num2){
        $soma = $num1 + $num2;
        echo "<li>{$num1} + {$num2} = {$soma}";
    }

    function somarNumeros(...$numeros){
        // echo print_r($numeros);
        echo "<li>";
        $soma = 0;
        foreach ($numeros as $num) {
            $soma += $num;
            echo "{$num} + ";
        }
        echo " = {$soma}";
    }

    echo "Listinha somas:";
    somar(4, 5);
    somar(40, 35);
    somarNumeros(3, 2, 10, 40, 20, 50);


    function seila($nome, $numero, $texto, ...$numeros){
        echo "<br>";
        echo var_dump($numeros);
    }

    seila("nome", 10, "texto", 5, 7, 9, "texto", true);


    $veradeiro = true;

    if($veradeiro){
        function pessoa($nome, $idade){
            echo "<br><br>Nome: {$nome} - Idade: {$idade};";
        }
    }

    if($veradeiro){
        pessoa("William", 25);
    }


    function ThunderCats(){

        echo "<br>Thunder Thunder";

        function HeMan(){
            echo "<br>Eu tenho a força!";
        }

    }

    ThunderCats();
    HeMan();

    echo "<br>";

    function SomaDePandora(&$numero){
        $numero += 5;
        $numero = 99;
        // echo $numero;
        echo "<br>Variavel Numero: {$numero}";
    }


    $valor = 10;
    echo "<br>Variavel Valor: {$valor}";
    SomaDePandora($valor);
    echo "<br>Variavel Valor: {$valor}";

    
    function subtracao($n1=10, $n2=5){
        $sub = $n1 - $n2;
        echo "<li> {$n1} - {$n2} = {$sub}";
    }

    subtracao();
    subtracao(20);
    subtracao(3, 4);

    echo "<br><br>";
    function divisao(float $n1, float $n2):float{
        echo var_dump($n1); // float
        echo var_dump($n2); // float
        $divs = ($n1 / $n2);
        return $divs;
    }
    
    echo var_dump(1); // int
    echo var_dump(2); // int
    // divisao("2", "4");

    $conta = divisao(10, 5);
    echo "<br>Conta: " . $conta;




    function estranho(){
        echo "Ola Mundo!";
    }


    $dr = 'estranho';
    $dr();

    function conta($n1, $n2, &$res){
        $res = $n1 + $n2;
    }

    $resultado = 0;
    conta(34, 21, $resultado);
    echo "<br>{$resultado}";

?>