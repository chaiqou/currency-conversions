<?php

namespace Chaiqou\CurrencyConversions;

class CurrencyConversionsClass
{
    public static function currency(float $usd): self
    {
        return new static($usd);
    }

    public function __construct(protected float $usd)
    {

    }

    public function convertToGEL(): float
    {
        return $this->usd * 2.65;
    }

    public function convertToEUR(): float
    {
        return $this->usd * 0.85;
    }
}
