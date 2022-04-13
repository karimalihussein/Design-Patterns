<?php

namespace App\OOp\Relationship\Patterns\Creational\Builder;

use App\OOp\Relationship\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\keyboard;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Monitor;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Mouse;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types\Computer;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\UPS;

abstract class Builder
{
    protected Computer $computer;


    abstract public function buildMotherBoard(): MotherBoard;
    abstract public function buildKeyboard(): keyboard;
    abstract public function buildMouse(): Mouse;
    abstract public function buildMonitor(): Monitor;
    abstract public function buildCoolingSystem(): CoolingSystem;
    abstract public function buildUPS(): UPS;
    abstract public function getComputer(): Computer;
       
}