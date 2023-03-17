<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'ana',
        'nota' => 9,
    ],
];

$ordenadaPorChave = $notas;

function ordenaNota(array $nota1, array $nota2): int
{
    if($nota1['nota'] > $nota2['nota']){
        return -1;
    }
    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }
    return 0;
}

usort($notas, 'ordenaNota');
var_dump($notas);
