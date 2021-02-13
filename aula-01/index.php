<?php
//
//$nome = 'Lucas';
//$sobrenome = 'Alves';
//$idade = 26;
//
//    echo "olá, meu nome é {$nome} {$sobrenome} e tenho {$idade} anos!<br>";
//$vila = [
//  'Lucas',
//  10 =>'Alves',
//  'Santos',
//
//];
//
//echo $vila[0];
//echo $vila[10];
//echo $vila[11];
//
////var_dump($vila);
//for($contador = 0; $contador <= 10; $contador++):
//echo "8 x $contador =".($contador*8)."<br>";
//
//endfor;
//
//
//echo "<hr>";
//
//$cores = ["verde","vermelho","azul","preto"];
//foreach ($cores as $indice => $valor):
//
//    echo $indice."-".$valor."<br>";
//
//endforeach;


for ($contador = 0; $contador <= 10; $contador++) {
    echo "Contador:".$contador."<br>";
}

$i = ['a','b','c'];

foreach ($i as $ia => $valor) {
    echo $valor."<br>";
}

function calcularMedia($a,$b,$c) {
    $media = ($a+$b+$c)/3;
    if($media >= 7){
        echo "Aprovado".$media;
    } else {
        echo "Reprovado".$media;
    }
}

calcularMedia(10,5, 2);
//arrays - compact / array_keys, arrays_value

echo "<hr>";

// $infoCompany = [
//     'name' => 'EspecialidadeTi',
//     'founder' => 'Carlos Ferreira',
//     'year_current' => 2021,
// ];
//
//
//$infoCompanyTwo = [
//    'courses' => ['PHP','JS','Vue JS','Laravel'],
//    'total_courses' => 26,
//];
//
//$infoCompany = array_merge($infoCompany, $infoCompanyTwo);
//echo '<pre>';
//var_dump($infoCompany);
//

//
//
//var_dump(count($infoCompany));
//
//$names = ['a','b','c','d','e','f'];
////
////for ($i = 0; $i < count($names); $i++) {
////    echo $names[$i]."<br>";
////}
//foreach ($names as $key => $nam) {
//    echo "{$key} -> {$nam}<br>";
//}

//$i = 0;
//while ($i < 10) {
//    echo $i;
//    $i++;
//}

function calcularTriangulo($a,$b,$c) {
    if ($a === $b && $b === $c  ){
        return 'Equilátero';
        //quando existem dois lados que possuem mesma medida
    } if ($a !== $b && $b !== $c && $a !== $c) {
        return 'Isoceles';
    } else {
        return 'Escaleno';
    }
}
echo calcularTriangulo(8,8,8)."<br>";
echo calcularTriangulo(8,7,7)."<br>";
echo calcularTriangulo(5,6,8)."<br>";

echo "<hr>";
//exercicio01
function somar($a, $b) {
        $resultado = $a+$b;

    if ($resultado > 20) {
        return $resultado+8;

    } else if ($resultado >= 20) {
        return $resultado-5;
    }
}
echo somar(10,10);
echo "<hr>";

#include <stdio.h>
$x = 11; // este é o valor a ser analizado
$y = array(10, 5, 2); // tive que criar uma matriz para ser possivel a divisão com as condiçoes
// o $y[0] reprensata o numero 10 do vetor o $y[1] reprensata o numero 5 do vetor o $y[2] reprensata o numero 2
// do vetor
//$x % $y[arg] == 0 --> quer dizer se esta divisão obtem resto zero
if ($x % $y[0] ==0 and $x % $y[1] == 0 and $x % $y[2] == 0) { //fiz tudo em uma estrutura as condiçoes que o exercicio pede
    echo "$x é divisivel por 10 por 5 e por 2";
}
else if ($x % $y[0] == 0) { // começei do inicio denovo para saber se esta era a unica resposta da condição
    echo "$x é divisivel por 10 com resto zero <br/> ";
}
else if ($x % $y[1] == 0) { // continuei para saber se esta era a unica resposta da condição
    echo "$x é divisivel por 5 com resto zero ";
}
else if ($x % $y[2] == 0) { // continuei para saber se esta era a unica resposta da condição
    echo "$x é divisivel por 2 com resto zero";
}
else {echo " $x não é divisivel por 10 por 5 e nem por 2 com resto zero <br/>";}

echo "<hr>";

//function calcularTriangulo($nome,$b,$c) {
//    if ($a === $b && $b === $c  ){
//        return 'Equilátero';
//    } else {
//        return 'Escaleno';
//    }
//}
//echo calcularTriangulo(8,8,8)."<br>";
//

























