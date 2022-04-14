<?php


namespace App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class Disk
{
    private string $type;

    public function __construct(string $type){
        $this->type = $type;
    }

    public function getType() : string{
        return $this->type;
    }

    
}