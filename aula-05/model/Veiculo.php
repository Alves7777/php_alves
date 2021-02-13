<?php

declare(strict_types=1);

class Veiculo
{
    public string $placa;
    public string $modelo;
    public int $ano;
    public int $km;
    public string $marca;

    public function __construct(
        string $placa,
        string $modelo,
        string $marca,
        int $ano,
        int $km
    ) {
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->setAno($ano);
        $this->setKm($km);
    }

    public function getKm(): int
    {
        return $this->km;
    }
    public function setKm(int $km): void
    {
        if($km < 0) {
            throw new LogicException('Km precisa ser maior que zero');
        }
     $this->km = $km;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function setAno(int $ano): void
    {
        if($ano < 1990) {
            throw new LogicException('Km precisa ser maior ou igual a 1990');
        }
        $this->ano = $ano;
    }
}
