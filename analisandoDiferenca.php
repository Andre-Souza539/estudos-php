<?php

$notas = [
    'Vinicius' => null,
    'Joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

ksort($notas);
var_dump($notas);

if (is_array($notas)){
    echo "sim é um Array" . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Ana Fez Prova? ' . PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguém tirou 10? ' . PHP_EOL;
var_dump(in_array(10,$notas,true));

echo 'quem tirou 10? ' . PHP_EOL;