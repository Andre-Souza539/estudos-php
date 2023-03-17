<?php

$notasBi_1 = [
    'Vinicius' => 6,
    'Joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBi_2 = [
    'Joao' => 7,
    'Ana' => 6,
    'Roberto' => 8,
];

var_dump(array_diff_key($notasBi_1,$notasBi_2));

$alunosFaltantes = array_diff_key($notasBi_1,$notasBi_2);

$notasAlunos = array_values($alunosFaltantes);
$nomesAlunos = array_keys($alunosFaltantes);

var_dump($nomesAlunos);
var_dump($notasAlunos);
var_dump(array_combine($notasAlunos,$nomesAlunos));