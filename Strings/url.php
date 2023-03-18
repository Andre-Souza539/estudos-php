<?php

$url = 'https://alura.com.br';
$condition = str_starts_with($url,'https');

if($condition) {
    echo " é uma URL segura";
} else {
    echo " Não é uma URL segura";
}
echo PHP_EOL;

$br = str_ends_with($url , '.br');

if($br){
    echo "é um domínio do brasil";
} else {
    echo "não é um dominio do Brasil";
}


