<?php

include_once 'Cliente.php';
include_once 'Cartao.php';
include_once 'Contaa.php';


$clienteLucas = new Cliente("", "", "");
$clienteLucas->nome = 'Lucas Alves';
$clienteLucas->cpf = "123.123.123-12";

$conta = new Conta();
$conta->numero = "0012345";
$conta->tipo = "Corrente";
$conta->saldo = 0;
$conta->abertura = new Datetime();

$clienteLucas->conta = $conta;

$card = new Cartao();
$card->numero = "1234 1234 1234 1234";
$card->tipo = "Debito";
$card->limite = 1000;

$card2 = new Cartao();
$card2->numero = "8786 1234 1234 1234";
$card2->tipo = "Credito";
$card2->limite = 1000;

$clienteLucas->cartoes[] = $card;
$clienteLucas->cartoes[] = $card2;

echo $clienteLucas->conta->numero.PHP_EOL;
echo "Quantos cartoes".count($clienteLucas->cartoes).PHP_EOL;
