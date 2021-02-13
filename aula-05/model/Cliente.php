<?php

class Cliente extends Pessoa
{
    private array $veiculos;
    public string $telefone;

    public function getVeiculos(): array
    {
        return $this->veiculos;
    }

    public function addVeiculo(Veiculo $veiculo): void
    {
        $this->veiculos[] = $veiculo;
    }

}