<?php

namespace App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types\Computer;

interface ICoolingSystem
{
    public function CoolDown(int $temp): bool;
}