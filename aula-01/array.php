<?php

$alunos[] = [
    'nome' => 'Pamplona',
    'cidade' => 'Fortaleza',
];
$alunos[] = [
    'nome' => 'Jonathan',
    'cidade' => 'Maranguape',
];

$alunos[] = [
    'nome' => 'Lucas Safado',
    'cidade' => 'Monsenhor Tabosa',
];

$alunos[] = [
    'nome' => 'Sandro',
    'cidade' => 'Caucaia',
];

$alunos[] = [
    'nome' => 'Tiberio',
    'cidade' => 'Parambu',
    'fones' => [
        ['op' => 'Claro', 'numero' => '(85) 9 8666-1234'],
        ['op' => 'Claro', 'numero' => '(85) 9 8666-0000'],
    ],
];


echo $alunos[4]['fones'][1]['numero'];
