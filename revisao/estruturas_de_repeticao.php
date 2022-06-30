<?php

/*
    While
    Do While
    For
    ForEach
*/

// $a = 0;
// echo $a++; // POS-INCREMENTO
// echo "<br>";
// echo ++$a; // PRÉ-INCREMENTO

// $contador = 10;
// while($contador > 0){
//     echo "O valor atual do contador é $contador<br>";
//     $contador--;
// }

// $contador = 0;

// while(true){
//     if ($contador == 10)
//         break;
//     echo "Ainda não chegou lá!!!<br>";
//     $contador++;
// }

// while ($contador < 11) {
//     echo "O valor atual do contador é " . $contador++ . "<br>";
//     if ($contador == 5) {
//         echo "Chegou<br>";
//         continue;
//     }
// }

// $contador = 0;

// do {
//     echo "O valor atual do contador é " . $contador++ . "<br>";
// } while ($contador < 11);

// for($i=0;$i < 11;$i++){
//     echo "O valor atual do contador é $i <br>";
// }

$nomes = array("Anderson", "Thomas", "Maria", "José");

// for($index=0;$index < count($nomes);$index++){
//     echo "<p>" . $nomes[$index] . "</p>";
// }

// for ($index = count($nomes)-1; $index >= 0; $index--) {
//     echo "<p>" . $nomes[$index] . "</p>";
// }

foreach ($nomes as $index => $nome) {
    echo "<p>$index - $nome<p>";
}

$invertido = array_reverse($nomes);
foreach ($invertido as $index => $value) {
    echo "<p>$index - $value<p>";
}
