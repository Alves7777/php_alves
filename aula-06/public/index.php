<?php

function main(): void
{
    include '../vendor/autoload.php'; //pra fazer o auto carregamento, e não precisarmos botar trocentos includes

    $url = $_SERVER['REQUEST_URI']; //captura a url que o usuário tá acessando

    $routes = include '../config/routes.php'; //importa as rotas e coloca elas dentro da variavel $routes

    //testa se a url está mapeada nas rotas, se não tiver encerra a aplicaćão mostrando "Pagina não encontra"
    if (!$routes[$url]) {
        echo "<h1>Página nâo encontrada</h1>";
        return;
    }

    $controller = $routes[$url]['controller']; //recupera o nome do Controller
    $method = $routes[$url]['action']; //recupera o nome do método

    (new $controller())->$method(); //aqui a gente executa o metodo do Controller (especificados na rota)
//    alternativa ao codigo da linha anterior
//    $c = new $controller();
//    $c->$method();
}

include '../views/base.phtml';

