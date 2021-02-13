<?php
    $nomes = [
      'Lucas',
      'Alves',
      'Santos',
      'Niely',
        'Alves',
    ];
//echo count($nomes);
$numero = 0;
foreach ($nomes as $cadaNome) {
    $numero += 1;
}
echo $numero;
