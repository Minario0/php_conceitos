<?php
/* exemplo 1 */


/*inicia sendo 1, como 1 é < 10 ele avança no laço e adiciona mais 1 no "$i++", isso vai se repetindo até chegar no 10, pois quando bater 11 não será mais
 <=10, fazendo com q o laço pare.
 */


 for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

echo "<br>";

/* exemplo 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

echo "<br>";

/* exemplo 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

echo "<br>";

/* exemplo 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);






//laçp de repetição for

for ($i=1 ; $i<=10 ; $i++){
//   inicial compara saida


    
    if( $i == 5 or $i == 8){
        //break
        continue;
        echo "TESTTE".$i;//nao vai funfar pq quando chega no 'continue' ele volta para o inicio do
    }else{
        echo "<br>i = " . $i;
    }
}








// /*
//  * Esta é uma array com alguns dados que devem ser modificados want to modify
//  * durante a execuçao do loop for.
//  */
// $pessoas = array(
//     array('nome' => 'Lucas', 'salt' => 856412),
//     array('nome' => 'André', 'salt' => 215863)
// );

// for($i = 0; $i < count($pessoas); ++$i) {
//     $pessoas[$i]['salt'] = mt_rand(000000, 999999);
// }













?>
<ul><a href="index.php"><button>Voltar</button></a></ul>