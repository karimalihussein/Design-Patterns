<?php

namespace App\OOP;

use App\OOP\Cars\WeightHolder;
class Order
{

    private string $source;
    private string $destination;
    private int $weight;

    public function __construct(string $source, string $destination, int $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }


    public function deliverOrder(Car $car): string 
    {   $car->turnOn();
        $car->move();
        $car->accelerate(200);
        $car->park();
        $car->turnOff();
        if($car instanceof WeightHolder)
        {
            $car->leftCarge();
        }
        return "i am Moving form {$this->source} to {$this->destination} to deliver the package of 
        {$this->weight} kgs";

    }
}