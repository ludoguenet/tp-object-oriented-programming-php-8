<?php

namespace Source;

use Exceptions\RouteNotFoundException;
use Router\Router;

class App
{
    public function __construct(private Router $router, private array $request)
    {}

    public function run()
    {
        try {
            echo $this->router->resolve($this->request['uri'], $this->request['method']);
        } catch (RouteNotFoundException $e) {
            http_response_code(404);
            echo Renderer::make('errors/404');
            exit;
        }   
    }
}