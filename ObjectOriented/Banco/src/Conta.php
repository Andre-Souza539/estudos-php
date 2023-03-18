<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar($valor)
    {
        if($valor > $this->saldo) {
            echo 'Não pode sacar valor maior que o Saldo';
        } else {
            $this->saldo -= $valor;
            echo "Valor Sacado: {$valor}";
        }
    }
}