<?php
    $url = $_SERVER['REQUEST_URI'];
    include 'views/menu.phtml';

    $routes = [
        '/' => 'home',
        '/cadastro' => 'cadastro',
        '/listar' => 'listar',
    ];
    function home(): void
    {
        echo 'Página inicial';
    }
    function cadastro(): void
    {
        if ($_POST){
            $newContact = implode(';', $_POST);

            $file = fopen('storage/contatos.csv','a+');

            fwrite($file, $newContact.PHP_EOL);

            fclose($file);

            header('location:/listar');
        }
        include 'views/cadastro.phtml';
    }
    function listar(): void
    {
        $contatinhos = file('storage/contatos.csv');

        include 'views/tabela.phtml';
    }
    if (isset($routes[$url])){
        $routes[$url]();
    } else {
        include 'views/error404.phtml';
    }