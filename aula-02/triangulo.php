<?php
declare(strict_types=1);
ini_alter('display_errors','1');

function triangulo(float $a, float $b, float $c): string
{
    if ($a === $b && $b === $c) {
        return "Equilatero";
    }
    if ($a !== $b && $a !== $c && $b !== $c) {
        return "Escaleno";
    }
    return "Isoceles";
}
echo "4 4 4: ".triangulo(4,4,4,).PHP_EOL;
echo "4 5 4: ".triangulo(4,5,4,).PHP_EOL;
echo "1 2 3: ".triangulo(1,2,3,).PHP_EOL;
