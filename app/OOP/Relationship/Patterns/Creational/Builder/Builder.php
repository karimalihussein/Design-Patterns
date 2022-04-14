<?php

namespace App\OOP\Relationship\Patterns\Creational\Builder;

use App\OOP\Relationship\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\Keyboard;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\Monitor;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\Mouse;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\Types\Computer;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\UPS;

abstract class Builder
{
    protected Computer $computer;


    // abstract protected function buildMotherBoard(): MotherBoard;
    // abstract protected function buildKeyboard(): Keyboard;
    // abstract protected function buildMouse(): Mouse;
    // abstract protected function buildMonitor(): Monitor;
    // abstract protected function buildCoolingSystem(): CoolingSystem;
    // abstract protected function buildUPS(): UPS;
    // abstract public function getComputer(): Computer;


    abstract protected function buildMotherBoard(): MotherBoard;
    abstract protected function buildKeyboard(): Keyboard;
    abstract protected function buildMouse(): Mouse;
    abstract protected function buildMonitor(): Monitor;
    abstract protected function buildCollingSystem(): CoolingSystem;
    abstract protected function buildUPS(): UPS;
    abstract public function getComputer(): Computer;
       
}