<?php

include_once 'model/Pessoa.php';
include_once 'model/Cliente.php';
include_once 'model/Mecanico.php';
include_once 'model/Servico.php';
include_once 'model/Veiculo.php';

$lucas = new Cliente('123.123.123-12','Lucas Alves');
//$lucas -> nome = 'Lucas Alves';
//$lucas -> cpf = '123.123.123-12';
$carro = new Veiculo('PCC8787','Chevrolet','Onix','2010','15000');

$lucas->addVeiculo($carro);


//$lucas ->addVeiculo('motinha');
//$lucas ->addVeiculo('skate');

var_dump($lucas).PHP_EOL;
