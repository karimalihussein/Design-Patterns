<?php


namespace App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class CPU
{
    private int $speed;

    public function __construct(int $speed){
        $this->speed = $speed;
    }

    public function getSpeed() : int{
        return $this->speed;
    }
}