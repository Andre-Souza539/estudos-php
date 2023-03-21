<?php
 /* Crie um programa que leia um número inteiro e verifique se ele é par ou ímpar. */

$numero = 9;
parOuImpar($numero);
function parOuImpar($numero){
    if (($numero%2) == 0){
        echo 'numero par';
    } else {
        echo 'numero impar';
    }
}