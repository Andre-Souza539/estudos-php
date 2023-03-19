<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar($valor)
    {
        if($valor > $this->saldo) {
            echo "Conta do {$this->nomeTitular} Não pode sacar valor maior que o Saldo" . PHP_EOL;
        } else {
            $this->saldo -= $valor;
            echo "Conta do {$this->nomeTitular}: Valor Sacado: {$valor}" . PHP_EOL;
        }
    }

    public function depositar($valor) {
        $this->saldo += $valor;
        echo "Conta do {$this->nomeTitular}: Seu novo saldo é {$this->saldo}" . PHP_EOL;
    }

    public function transferir(Conta $conta, float $valor){
        if ($valor > $this->saldo) {
            echo "Conta do {$this->nomeTitular}: Você não pode transferir" . PHP_EOL;
        } else {
            $this->sacar($valor);
            $conta->depositar($valor);
            echo "Conta do {$this->nomeTitular}: valor R$ {$valor} Transferido para {$conta->nomeTitular}" . PHP_EOL;
        }
    }

}