<?php


$nome = 'André Luiz Junqueira de Souza';


var_dump(explode(' ',$nome));

list($nome, $segundoNome, $nomeFamilia, $sobreNome) = explode(' ',$nome);

echo $nome . PHP_EOL;
echo $segundoNome . PHP_EOL;
echo $nomeFamilia . PHP_EOL;
echo $sobreNome . PHP_EOL;