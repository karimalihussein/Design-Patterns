<?php

namespace App\OOP\Relationship\Patterns\Creational\Builder;

use App\OOP\Relationship\Patterns\Creational\Builder\Computer\Types\Computer;

class Director
{
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }



    public function changeBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function makeComputer(): Computer
    {
        return $this->builder->getComputer();
    }
}