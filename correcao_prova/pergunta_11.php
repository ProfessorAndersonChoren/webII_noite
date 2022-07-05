<?php
$colecao = [1, 6, 3, 9, 5];

$invertida = versao_tres($colecao);
foreach ($invertida as $numero) {
    echo $numero . " ";
}

function versao_um(array $colecao)
{
    $aux = [];
    foreach ($colecao as $numero) {
        array_unshift($aux, $numero);
    }
    return $aux;
}

function versao_dois(array $colecao)
{
    $aux = [];
    for ($index = count($colecao) - 1; $index >= 0; $index--) {
        array_push($aux, $colecao[$index]);
    }
    return $aux;
}

function versao_tres(array $colecao)
{
    return array_reverse($colecao);
}