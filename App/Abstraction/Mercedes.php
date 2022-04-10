<?php

namespace App\Abstraction;

use App\Abstraction\Car;

class Mercedes extends Car
{

    public function move(): int
    {
        return $this->speed;
    }

    public function turnOn(): bool
    {
        $this->ternedOn = true;
        return true;
    }

    public function turnOff(): bool
    {
        $this->ternedOn = true;
        return true;
    }

    public function acceLerate(int $speed): bool
    {
        $this->speed = $speed;
        return true;
    }

    public function park(): bool
    {
        return true;
    }
}