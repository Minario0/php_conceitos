<?php

/*Cire uma variavel do tipo array com o nome frutas
esse array deve ter os seguintes elementos
mamão maça melão    

2 utilizando as funçoes de array faça
a inclusão de uma nova fruta no inicio do array
b incluão de uma nova fruta no final do array
c exclusão de uma fruta que esta na posição 1
d exclusão de uma fruta q esta na ultima posição
e alteração d euma fruta que esta na posição 1 por maracuja 
*/

$frutas = ['mamão','maça','melão'];
echo "<pre>";
print_r($frutas);
echo "</pre>";


array_unshift($frutas, "banana");

echo "<pre>";
print_r($frutas);
echo "</pre>";


array_push($frutas, "pera");

echo "<pre>";
print_r($frutas);
echo "</pre>";


array_splice($frutas, 0, 1, ["maracuja"]);

echo "<pre>";
print_r($frutas);
echo "</pre>";


array_pop($frutas);

echo "<pre>";
print_r($frutas);
echo "</pre>";


array_splice($frutas, 0, 1, ["maracuja"]);

echo "<pre>";
print_r($frutas);
echo "</pre>";






?>
<ul><a href="index.php"><button>Voltar</button></a></ul>