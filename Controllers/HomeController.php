<?php

namespace Controllers;

use Source\Renderer;

class HomeController
{
    public function index(): Renderer
    {
        return Renderer::make('home/index');
    }
}