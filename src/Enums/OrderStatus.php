<?php

namespace Source\Enums;

enum OrderStatus: int
{
    case Delivered = 1;
    case Cancelled = 2;
    case Processing = 3;

    public function toFrenchName()
    {
        return match ($this) {
            self::Delivered => OrderSmiley::Happy,
            self::Cancelled => OrderSmiley::Sad,
            self::Processing => OrderSmiley::Pokerface
        };
    }
}