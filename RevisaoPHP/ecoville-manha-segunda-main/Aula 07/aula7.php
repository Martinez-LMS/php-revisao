<?php 

    echo "<h1>Aula 07</h1>";

    function quebra(){
        echo "\n<br>\n";
    }

    $str = "Janela";
    echo $str[-1];
    
    $str[2] = "O";
    echo $str;

    quebra();

    echo $str[0] . "\noão";

    quebra();
    $tamanho = strlen($str);
    echo "Tamanho STR: " . $tamanho;

    quebra();
    for ($i=0; $i < $tamanho; $i++) { 
        echo "<br>" . $str[$i];
    }
   

    // "" - ''
    quebra();
    echo "<br>um teste legal";
    echo '<br>outro teste legal';

    echo "<br> olha \n essa string";
    echo '<br> olha essa \n outra string';

    echo "<br> olha essa \\n barra";
    echo '<br> olha essa \ barra';

    $teste = "jean";
    echo "<br>O {$teste} agora parou de falar";
    echo '<br>O {$teste} agora parou de falar';
    
    quebra();
    echo "<br>this isn't";
    echo '<br>this isn\'t';
    // echo '<br>this isn\\'t';

    quebra();
    echo "<br> Deletar C:\usuario\\nateus ?";
    echo '<br> Deletar C:\usuario\nadmin ?';


    quebra();

    function soma($a, $b){
        return $a + $b;
    }

    $num = 55;
    echo "<br>O resultado é: $num.";
    echo "<br>O resultado é: {$num}.";
    echo "<br>O resultado é: " . $num . ".";
    echo '<br>O resultado é: {$num}.';
    
    echo "<br>O resultado é: " . soma(10, 15) . ".";
    echo "<br>O resultado é: {soma(10, 15)}.";
    
    $array = ["Azul", "Amarelo", "Verde"];
    echo "<br>Valor do array: {$array[0]}.";
    echo "<br>Valor do array: ". $array[0] . ".";

    quebra();
    $a = 10;
    $$a = 20;

    echo "<br>Valor 1: {$a} - Valor 2: {$$a}";
    echo $a;
    echo $$a;


    quebra();

    $novaVar = 80;
    $heredoc = <<<TESTE

        <h2> O titulo da pagina </h2>
                    <p>O texto da
                     pagina</p>
        <p> {$novaVar} </p>
    

    TESTE;

    echo $heredoc;
    
    
    $nowdoc = <<<'OUTROTESTE'

    <h2> O titulo da pagina </h2>
                    <p>O texto da
                     pagina</p>
        <p> {$novaVar} </p>

    OUTROTESTE;

    echo $nowdoc;

    
    quebra();
    
    $tamanho = strlen("123nasoid");
    echo "Tamanho: " . $tamanho;

    $str = "McDonauilds";
    $parte = substr($str, 2, 8);
    echo "<br>Str: {$str}";
    echo "<br>Parte: {$parte}";

    echo "<br>Maiusculo: " . strtoupper($parte);
    echo "<br>Minusculo: " . strtolower($parte);

    $nova = str_replace("ui", "", $parte);
    echo "<br>Nova: {$nova}";

    /*
        number_format() // formatar numero
        printf() // impimir e formatar 
        print_r()  // mostrar o array

        var_dump() // mostra array e tipo de variaveis
        
        trim()
        ltrim()
        rtrim()

        str_word_count() // contagem de palavras
        explode() // quebras elas em array ["eu", "estou", "com", "fome"]
        str_split() // 
        implode()
        join()

        strtoupper() // TUDO MAIUSCULO
        strtolower() // TUDO MINUSCULO
        ucfirst() // Só essa maiuscula
        ucwords() // As Palavras Vao Ficando Assim

        strrev() // nome - emon
        strpos() // Janela - ela -> 3
        stripos() // Janela - ELa -> 3





    
    */


    $input = "Alien";
    quebra();
    echo str_pad($input, 10);                      // produces "Alien     "
    quebra();
    echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
    quebra();
    echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
    quebra();
    echo str_pad($input,  6, "___");               // produces "Alien_"
    quebra();
    echo str_pad($input,  3, "*");


    function titulo($texto){
        $tamanho = 10 + strlen($texto);

        echo "\n<br>";
        echo str_pad("",  $tamanho, "*");
        echo "\n<br>";
        echo str_pad($texto,  $tamanho, "*", STR_PAD_BOTH);
        echo "\n<br>";
        echo str_pad("",  $tamanho, "*");
        echo "\n<br>";

    }

    
    titulo("Aula Strings");
    titulo("Aula Strings - Aula Formulario");
?>