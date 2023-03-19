<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

    public function __construct (string $nome, string $cpf, float $saldo) {
        $this->nomeTitular = $nome;
        $this->cpfTitular = $cpf;
        $this->saldo = $saldo;
    }

    /**
     * @return string
     */
    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    /**
     * @param string $cpfTitular
     */
    public function setCpfTitular(string $cpfTitular): void
    {
        $this->cpfTitular = $cpfTitular;
    }

    /**
     * @return string
     */
    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    /**
     * @param string $nomeTitular
     */
    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    /**
     * @return float
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @param float $saldo
     */
    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }



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