<?php

namespace App\Abstraction;
use App\Abstraction\Car;

class Order
{

    protected string $source;
    protected string $destination;
    protected int $weight;


    public function __construct(string $source, string $destination, int $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }

    public function deliverOrder(Car $car): string
    {
        $car->turnOn();
        $car->move();
        $car->acceLerate(200);
        $car->park();
        $car->turnOff();
        return "i am move from {$this->source} to {$this->destination} with {$this->weight} kg";
    }
}