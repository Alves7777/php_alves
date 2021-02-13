<?php

//class Product
//{
//    var $name;
//    var $description;
//    var $price;
//    var $peso;
//
//    function get() {
//        return "{$this->name};{$this->description};{$this->price};{$this->peso};<hr>";
//    }
//}
//
//$tv = new Product();
//
//$tv -> name = 'TV';
//$tv -> description = 'Smart TV';
//$tv -> price = 4.500;
//
//echo $tv->get();
//
//$geladeira = new Product();
//
//$geladeira -> name = 'Geladeira';
//$geladeira -> description = 'Degelo automático';
//$geladeira -> price = 2.500;
//
//echo $geladeira ->get();
//
//
//$microondas = new Product();
//
//$microondas -> name = 'Consul';
//$microondas -> description = 'automático';
//$microondas-> price = 2.500;
//$microondas-> peso = '5kg';
//
//echo $microondas ->get();

class Product {
    var $name;
    var $description;
    var $price;

    function __construct(String $name, String $desc, float $pri)
    {
        $this ->name = $name;
        $this ->description = $desc;
        $this ->price = $pri;
    }

    function get() {
        return "{$this->name}, {$this->description}, {$this->price} <hr>";
    }
}

$product1 = new Product('TV','Muito boa','4.900');
echo $product1 -> get();

$product2 = new Product('Geladeira','Super gelada','2.909');
echo $product2 -> get();

















