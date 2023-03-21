<?php
/* Crie um programa que calcule a sequência de Fibonacci para um determinado número de termos. */

$nTermos = 3;
$fibonacci = 1;

fibonacci($nTermos);


function fibonacci($n) {
    $fib = array(0, 1); // inicializa a sequência de Fibonacci com os dois primeiros termos
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2]; // calcula o próximo termo somando os dois anteriores
    }
    return $fib; // retorna a sequência completa
}

