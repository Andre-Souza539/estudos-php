<?php

$alunos2022 = [
    'Vinicius',
    'Joao',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'André',
    'Julho',
    'Athena',
    'Angel',
    'Mia',
    'Antony',
    'Litte Devil'
];

$alunos2023 = array_merge($alunos2022,$novosAlunos);

sort($alunos2023);

var_dump($alunos2023);