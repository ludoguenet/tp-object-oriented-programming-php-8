<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Router\Router;

class RouterTest extends TestCase
{
    /** @test */
    public function it_registers_get_routes(): void
    {
        $router = new Router();
        $router->get('products', ['ProductController', 'index']);

        $this->assertEquals(['GET' => ['products' => ['ProductController', 'index']] ], $router->routes());
    }

    /** @test */
    public function it_registers_post_routes(): void
    {
        $router = new Router();
        $router->post('products', ['ProductController', 'index']);

        $this->assertEquals(['POST' => ['products' => ['ProductController', 'index']] ], $router->routes());
    }

        /** @test */
    public function there_is_no_routes_before_registering_routes(): void
    {
        $router = new Router();

        $this->assertEmpty($router->routes());
    }
}