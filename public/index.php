<?php

use Exceptions\RouteNotFoundException;
use Router\Router;

require './../vendor/autoload.php';

$router = new Router();

$router->register('/', function () {
    return 'HomePage';
});

$router->register('/contact', function () {
    return 'Contact Page';
});

try {
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (RouteNotFoundException $e) {
    echo $e->getMessage();
}