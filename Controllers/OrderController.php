<?php

namespace Controllers;

use Models\Order;
use Source\Renderer;

class OrderController
{
    public function index(): Renderer
    {
        $orderModel = new Order();
        $orders = $orderModel->getStatus(\Source\Enums\OrderStatus::Processing);

        return Renderer::make('orders/index', compact('orders'));
    }
}