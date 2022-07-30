<?php

namespace App;

class Product
{

    private string $name;
    private int $quantity;

    public function __construct(string $name, int $quantity)
    {
        $this->name = $name;
        $this->quantity = $quantity;
    }

    public function increaseQuantity(int $quantity): void
    {

        if ($quantity <= 0) {

            throw new \InvalidArgumentException('the quantity can\'t be zero or less');
        }

        $this->quantity += $quantity;
    }

    public function decreaseQuantity($quantity)
    {
        if ($this->quantity - $quantity < 0) {
            $this->quantity  = 0;
        } else {
            $this->quantity -= $quantity;
        }
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}