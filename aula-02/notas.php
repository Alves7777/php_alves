<?php
declare(strict_types=1);
ini_alter('display_errors',1);

$notas = [
    (float) "9",
    (float) "5.5",
    8.5,
    4,
];
function media(array $numeros): float
{
    $quantidade = 0;
    $total = 0;
    foreach($numeros as $cadaNumero){
        $quantidade++;
        $total += $cadaNumero;
    }
    return $total/$quantidade;
}
echo "Media do aluno".media($notas).PHP_EOL;