<?php


namespace App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class GPU
{
    private int $size;

    public function __construct(int $size){
        $this->size = $size;
    }

    public function getSize() : int{
        return $this->size;
    }
}