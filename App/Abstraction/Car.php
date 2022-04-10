<?php

namespace App\Abstraction;

abstract class Car
{
    protected int $speed;
    protected int $numberofdoors;
    protected string $gearboxsystem;
    protected string $color;
    protected bool $ternedOn = false;

    public function __construct(int $speed, int $numberofdoors, string $gearboxsystem, string $color)
    {
        $this->speed = $speed;
        $this->numberofdoors = $numberofdoors;
        $this->gearboxsystem = $gearboxsystem;
        $this->color = $color;
    }


    public abstract function move(): int;
    public abstract function turnOn(): bool;
    public abstract function turnOff(): bool;
    public abstract function acceLerate(int $speed): bool;
    public abstract function park(): bool;
}