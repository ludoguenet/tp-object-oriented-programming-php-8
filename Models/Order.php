<?php

namespace Models;

use RuntimeException;
use Source\Constant;
use Source\Orders\OrderStatus;

class Order extends Model
{
    public function getStatus(\Source\Enums\OrderStatus $orderEnum)
    {
        return $this->where('status', $orderEnum->value);
    }
}