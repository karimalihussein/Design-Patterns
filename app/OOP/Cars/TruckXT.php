<?php

namespace App\OOP\Cars;

use App\OOP\Car;

class TruckXT extends Car implements WeightHolder
{
    public function move() : int
    {
        return $this->speed;
    }

    public function turnOn() : bool
    {
        $this->turnOn = true;
        return true;
    }

    public function turnOff() : bool
    {
        $this->turnOn = false;
        return true;
    }

    public function accelerate(int $speed) : bool
    {
         $this->speed = $speed;
         return true;
    }

    public function park() : bool
    {
        return true;
    }
    
    public function leftCarge(): bool
    {
        return true;
    }
}