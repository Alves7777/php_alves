<?php

declare(strict_types=1);

class Servico
{
    public Mecanico $mecanico;
    public Veiculo $veiculo;
    public string $descricao;
    public int $status;
    public \DataTime $data;
    public string $os;
}