<?php
// echo '<h1>Hello World!!!</h1>';

// $name = 'Thiago';
// echo "<h1>Bem-vindo ao meu site $name</h1>";

// // const NOME = "Anderson";
// define("NOME", "José");
// define("SOBRENOME", "Silva");

// // NOME = "Thiago";
// // SOBRENOME = "CUNHA";
// $name = "Maria";

// echo NOME." ".SOBRENOME;

// $numero_um = "10";
// $numero_dois = 10;

// echo $numero_um + $numero_dois;

// $name = 'Thiago';
// var_dump($name);

// $valor = null;
// var_dump(
//     (bool)$valor
// );

// if(0 == "true"){
//     echo "Entrou!!!";
// }else{
//     echo "Não entrou";
// }

echo "Velocidade média: ". mru(0,100,0,2) . " m/s";

function mru(float $initialPosition, float $finalPosition,float $initialTime,float $finalTime):float
{
    return ($finalPosition - $initialPosition) / ($finalTime - $initialTime);
}