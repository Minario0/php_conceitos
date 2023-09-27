<?php


$array01 = ['Senac',20,TRUE,['teste','posição array']];



echo "<pre>";
var_dump($array01);
echo "</pre>";

echo "<p>";

echo "<pre>";
print_r($array01);
echo "</pre>";


echo "<br>Posição 0 do array01: " . $array01[0];

echo "<br>";

echo "<br>Posição 1 do array01: " . $array01[1];
echo "<br>Posição 3,0 do array01: " . $array01[3][0];
echo "<br>Posição 2 do array01: " . $array01[2];
echo "<br>Posição 3,1 do array01: " . $array01[3][1];


?>


<ul><a href="index.php"><button>Voltar</button></a></ul>