<?php

require 'src/Conta.php';

$primeiraConta = new Conta('André Souza','123.456.789-10',200);
$segundaConta = new Conta('Leonardo Rosseto','987.654.321-10',1500);

var_dump($primeiraConta); // Verifique que o objeto não teve seus valores alterados
var_dump($segundaConta); // Note que este objeto possui os valores da segunda conta criada

$segundaConta->sacar(2000);

$primeiraConta->depositar(2000);

$segundaConta->transferir($primeiraConta,200);