<?php

declare(strict_types=1);

abstract class Pessoa
{
    public string $nome;
    public string $cpf;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }
}