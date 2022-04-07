<?php

namespace App\OOP\Cars;

use App\OOP\Car;

class Mercedes extends Car
{
    public function move() : int
    {
        return $this->speed * 2;
    }

    public function turnOn() : bool
    {
        // two operations before turning on
        $this->turnOn = true;
        return true;
    }

    public function turnOff() : bool
    {
        // two operations after turning off
        $this->turnOn = false;
        return true;
    }

    public function accelerate(int $speed) : bool
    {

         $this->speed = $speed * 0.5 + 10;
         return true;
    }

    public function park() : bool
    {
        // one operations before parking
        return true;
    }
}