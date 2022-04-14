<?php


namespace App\OOP\Relationship\Patterns\Creational\Builder\Computer;


class CoolingSystem
{
    private int $lowTempLimit;

    public function __construct(int $lowTempLimit){
        $this->lowTempLimit = $lowTempLimit;
    }

    public function getLowTempLimit() : string {
        return $this->lowTempLimit; 

    }


}