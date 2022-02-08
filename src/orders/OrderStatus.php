<?php

namespace Source\Orders;

class OrderStatus
{
    public const DELIVERED = 1;
    public const CANCELLED = 2;
    public const PROCESSING = 3;

    public static function all(): array
    {
        return [
            self::DELIVERED,
            self::CANCELLED,
            self::PROCESSING,
        ];
    }
}