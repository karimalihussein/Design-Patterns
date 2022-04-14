<?php


namespace App\OOP\Relationship\Patterns\Creational\Builder\Computer;


class UPS
{
    private int $duration;

    public function __construct(int $duration){
        $this->duration = $duration;
    }

    public function getDuration() : int {
        return $this->lowTempLimit; 

    }


}