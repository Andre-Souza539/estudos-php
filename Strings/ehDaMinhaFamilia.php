<?php

$nome = 'André Luiz Junqueira de Souza';

var_dump(str_contains($nome, 'Souza'));

$familia = 'Junqueira';
$ehDaFamilia = str_contains($nome, $familia);

if($ehDaFamilia){
    echo "Sim, é da Família {$familia}";
} else {
    echo "Não é da família {$familia}";
}

