<?php

// array_push — Adiciona um ou mais elementos no final de um array

// array_pop — Extrai um elemento do final do array

// array_shift — Retira o primeiro elemento de um array

// array_unshift — Adiciona um ou mais elementos no início de um array

// array_splice — Remove uma parte array e a substitui por outra coisa

// count — Conta o número de elementos de uma variável, ou propriedades de um objeto



$array = []; //um array vazio, lista vazia
$vazio = "";

array_push($array,"Senac","TAU");
array_push($array, ["Igor","Samuel","Evelyn","Matheus", "Estevan"]);
array_push($array[2], "Cauã");
array_push($array, "Teste");


echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br> A variavel array possui " .count($array)." Posições";

array_pop($array);

echo "<pre>";
print_r($array);
echo "</pre>";

array_shift($array);

echo "<pre>";
print_r($array);
echo "</pre>";

array_unshift($array, "Glauco");

echo "<pre>";
print_r($array);
echo "</pre>";




array_splice($array, 3, 1, ["SENAC TAU"]);

echo "<pre>";
print_r($array);
echo "</pre>";



?>
<ul><a href="index.php"><button>Voltar</button></a></ul>