<?php
    echo "Hello World!"; //echo mostra na tela

    //variaveis
    // toda variavel php começa com $ (cifrão)    //SEMPRE COLOCAR ; (PONTO E VIRGULA) DPS DE QUALQUER COISA

    $a = 10;
    $b = 20;

    //operador de atribuição =

    $soma = $a + $b;

    echo "<br>".$soma; // HTML concatenado com variável PHP

    //desvio condicional

    //laços de repetição

    //função

    //vetor e matriz

    echo (5 % 3)."\n<br>";           // imprime 2
    echo (5 % -3)."\n";          // imprime 2
    echo (-5 % 3)."\n";          // imprime -2
    echo (-5 % -3)."\n";         // imprime -2



//     +$a	Identidade	Conversão de $a para int ou float conforme apropriado.
// -$a	Negação	Oposto de $a.
// $a + $b	Adição	Soma de $a e $b.
// $a - $b	Subtração	Diferença entre $a e $b.
// $a * $b	Multiplicação	Produto de $a e $b.
// $a / $b	Divisão	Quociente de $a e $b.
// $a % $b	Módulo	Resto de $a dividido por $b.
// $a ** $b	Exponencial	Resultado de $a elevado a $b.

    $sub = $a - $b;
    echo "<br>Subtração: ". $sub; //-10
    
    $mut = $a * $b;
    echo "<br>multiplicação: ". $mut; //200
    
    $divisão = $a / $b;
    echo "<br>divisão: ". $divisão; //0.5
    
    $modulo = $a % $b;
    echo "<br>modulo: ". $modulo; //10
    
    $exp = $a ** 3;
    echo "<br>exponenciação: ". $exp; //1000



?>
<ul><a href="index.php"><button>Voltar</button></a></ul>