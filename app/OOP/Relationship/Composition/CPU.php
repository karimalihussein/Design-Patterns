<?php

namespace App\OOP\Relationship\Composition;


class CPU{
    
    private int $speed;

    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed() : int
    {
        return $this->speed;
    }
}