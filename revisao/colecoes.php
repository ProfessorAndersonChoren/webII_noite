<?php

$alunos_destaque = array(
    "João",
    "Maria"
);
$professores_destaque = [
    "Anderson",
    "Frodo",
    "Barcado"
];

// Adicionar elementos
// Adicionando ao final - Pilha
printData($alunos_destaque);
array_push($alunos_destaque, "Maria", "José", "Paulo");
printData($alunos_destaque);

// Adicionando ao inicio - Fila
printData($professores_destaque);
array_unshift($professores_destaque, "Nicolas", "Cury");
printData($professores_destaque);

// Remover do final - Pilha
printData($alunos_destaque);
array_pop($alunos_destaque);
printData($alunos_destaque);


// Remover do início - Fila
printData($professores_destaque);
array_shift($professores_destaque);
printData($professores_destaque);


function printData($array)
{
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    echo "<br>";
}