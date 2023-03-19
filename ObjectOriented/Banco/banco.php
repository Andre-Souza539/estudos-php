<?php

require 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->saldo = 200;
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'André Souza';
$segundaConta = new Conta();
$segundaConta->cpfTitular = '987.654.321-10';
$segundaConta->nomeTitular = 'Leonardo Rosseto';
$segundaConta->saldo = 1500;
var_dump($primeiraConta); // Verifique que o objeto não teve seus valores alterados
var_dump($segundaConta); // Note que este objeto possui os valores da segunda conta criada

$segundaConta->sacar(2000);
echo PHP_EOL;
$primeiraConta->depositar(2000);

$segundaConta->transferir($primeiraConta,200);