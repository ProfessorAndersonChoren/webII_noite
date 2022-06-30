<?php
// Operadores relacionais
$menor = 4 < 6;
$maior = 10 > 6;
$maiorOuIgual = 8 >= 10;
$menorOuIgual = 5 <= 6;
$diferente = 6 != 6;
$igual = 6 == 6;
// Todos eles serão booleanos

// var_dump($menor);
// echo "<br>";
// var_dump($diferente);

// if -> Só é executado quando o valor é TRUE
// else -> Só é executado quando o valor é FALSE

// if (mb_strlen("Paulo") > 9) // SE TRUE
//     echo "É maior";
// else // SE FALSE
//     echo "Não é menor";

$media = 7;

// if ($media >= 6)
//     echo "Aprovado";
// else if ($media >= 4)
//     echo "Em recuperação";
// else
//     echo "Reprovado";

// Operadores lógicos (Teoria de predicados)

$idade = 18;
$acompanhado = false;

// Conjunção -> &&
// Disjunção -> ||
// Negação -> ! -> Inverte o booleano

// if ($idade >= 18 && !$acompanhado)
//     echo "Seja Bem-vindo!!!";
// else if ($idade >= 16 && $acompanhado)
//     echo "Sejam Bem-vindos!!!";
// else
//     echo "Lamento, não foi autorizado!!!";


$operacao = 3;

// switch ($operacao) {
//     case 1:
//         echo "Escolheu sacar";
//         break;
//     case 2:
//         echo "Escolheu depositar";
//         break;
//     case 3:
//         echo "Escolheu transferir";
//         break;
//     default:
//         echo "Escolheu obter saldo";
// }

echo match ($operacao) {
    1 =>  "Escolheu sacar",
    2 => "Escolheu depositar",
    3 => "Escolheu transferir",
    default => "Escolheu obter saldo"
};
