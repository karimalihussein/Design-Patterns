<?php


namespace App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class NetworkCard
{
    private int $category;

    public function __construct(int $category){
        $this->category = $category;
    }

    public function getCategory() : int{
        return $this->category;
    }
}
