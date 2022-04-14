<?php

namespace App\OOP\Relationship\Patterns\Creational\Builder\Computer\Types;

interface ICoolingSystem
{
    public function coolDown(int $temp): bool;
}