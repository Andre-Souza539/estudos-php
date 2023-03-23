<?php

$arquivo = fopen('listaFilmes.txt','r');

while (!feof($arquivo)){
    $filme = fgets($arquivo);
    echo $filme;
}

fclose();