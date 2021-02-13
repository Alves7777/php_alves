<?php

$url = $_SERVER['REQUEST_URI'];
include 'views/menu.phtml';
/*
if ($url === '/cadastrar') {
    include 'views/produtos.phtml';
} else if ($url === '/listar') {
    include 'views/tabela.phtml';
} else {
    include 'views/error404.phtml';
}*/
$routes = [
  '/' => 'home',
  '/cadastrar' => 'cadastro',
  '/listar' => 'listar',
];
function home(): void
{
    echo 'Bem vindo';
}

function cadastro(): void
{
    include 'views/cadastro.phtml';
}

function listar(): void
{
    $contatinhos = file('storage/contatos.csv');

    include 'views/tabela.phtml';
}
if (isset($routes[$url])) {
    $routes[$url]();
} else {
    include 'views/error404.phtml';
}

