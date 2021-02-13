<?php

declare(strict_types=1);

function render(string $filename, array $data = []): void
{
    include "views/{$filename}.phtml";
}

function navbar(): void
{
    render('navbar');
}

function home(): void
{
    navbar();
    render('home');
}

function register(): void
{
    if ($_POST) {
        $file = fopen('storage/produtos.csv','a+');

        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $photoPath = 'storage/photos/'.$_FILES['photo']['name'];

        move_uploaded_file($_FILES['photo']['tmp_name'], $photoPath);

        fwrite($file, "{$name};{$price};{$quantity};{$description};{$photoPath};\n");

        fclose($file);

        header('location: /listar');

    }

    navbar();
    render('cadastro');
}

function listAll(): void
{
    $products = file('storage/produtos.csv');
    navbar();
    render('listar',$products);
}

function edit(): void
{

}

function remove(): void
{
    $id = $_GET['id'];

    $products = file('storage/produtos.csv');

    unset($products[$id]);

    unlink('storage/produtos.csv');

    $file = fopen('storage/produtos.csv','a+');

    foreach ($products as $product) {
        fwrite($file, $product);
    }
    fclose($file);

    header('location:/listar');
}


