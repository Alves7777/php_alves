<?php

class Cliente
{
    public string $nome;
    public float $saldo;
    public string $cpf;
    public bool $status;
    public array $cartoes;
    public Conta $conta;
}
