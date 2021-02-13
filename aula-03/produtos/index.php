<?php

ini_set('display_errors',1);

$url = explode("?", $_SERVER['REQUEST_URI'])[0];

include 'controller/actions.php';

$routes = include 'config/routes.php';

if (!isset($routes[$url])) {
    die('Página não encontrada');
}

$routes[$url]();