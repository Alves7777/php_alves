<?php

Class Produto {
    var $name;
    var $tipo;
    var $peso;
    var $valor;

    function get() {
        return "{$this->name};{$this->tipo};{$this->peso};{$this->valor}";

    }
}

$tv = new Produto();
$tv -> name = 'Samsung';
$tv -> tipo = 'Smart TV';
$tv -> peso = '50kg';
$tv -> valor = 3.500;


echo $tv -> get();
