<?php
declare(strict_types=1);
ini_alter('display_errors','1');

function calcularIMC(float $peso, float $altura): float
{
    return $peso/($altura*$altura);
}
echo 'Meu IMC é: '.calcularIMC(75,1.75).PHP_EOL;