<h2>Desvio Condicional (IF ELSE)</h2>
<?php
//if (expr)
//  statement

/*caso tenha somente uma linha de comando abaixo do if 
não ha necessidade de usar { }

 Para a estrutura abaixo é obrigatorio o uso de { }
if (expr){
    codigo1
    codigo2
}

*/
echo "<h3>Exemplos</h3>";
$idade = 10;

echo "<h4>Desvio condicional simples</h4>";
if ($idade >= 18)
    echo "<br>você tem ". $idade. " anos, então é maior de idade!";
else
    echo "<br>você tem ". $idade. " anos, então é menor de idade!";


echo "<h4>Desvio condicional composto</h4>";
if ($idade >= 18){
    echo "<br>você tem ". $idade. " anos, então é maior de idade!";
    echo "<br>Se for preso vai dormir na cadeia!";
}else{
    echo "<br>você tem ". $idade. " anos, então é menor de idade!";
    echo "<br>Se for preso, não vai poder dormir na cadeia!";
}


echo "<h4>Desvio condicional composto</h4>";
if ($idade >= 18)
    echo "você tem ". $idade. " anos, então é maior de idade!";
else if ($idade >=6)
    echo "você tem ". $idade. " anos, então é menor de idade!";
else
    echo "Você é bebe!!!";

echo "<p>";
if ($idade >= 18){
    echo "você tem ". $idade. " anos, então é maior de idade!";
    echo "<br>Se for preso vai dormir na cadeia!";
}else if ($idade >=18){
    echo "Voce tem ". $idade. " anos, entao voce é menor de idade";
    echo "<br>Se for preso não podera dormir na caddeia!";
}else{
    echo "voce é bebe";
}      








?>

<ul><a href="index.php"><button>Voltar</button></a></ul>