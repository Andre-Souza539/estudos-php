<?php

namespace Alura\Banco\Modelo;
class Funcionario extends Pessoa
{

    private string $cargo;


    public function __construct(string $nome, string $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }




}