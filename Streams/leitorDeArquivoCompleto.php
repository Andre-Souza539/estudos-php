<?php

$arquivo = fopen('listaFilmes.txt','r');

$filmes = fread($arquivo, filesize('listaFilmes.txt'));

echo $filmes;

fclose($arquivo);
