<?php
/* Crie um programa que calcule a média de notas de um aluno e verifique se ele foi aprovado ou reprovado. */

$prova1 = 7;
$prova2 = 9;
$mediaLimite = 7.5;

$media = ($prova1 + $prova2)/2;

if ($media >= $mediaLimite) {
    echo 'Você passou com média: ' . $media . PHP_EOL;
} else if ($mediaLimite > $media){
    echo 'Você Reprovou com média: ' . $media . PHP_EOL;
} else {
    echo "Err: Média Desconhecida";
}
