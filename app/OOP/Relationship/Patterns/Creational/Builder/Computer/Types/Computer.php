<?php


namespace App\OOP\Relationship\Patterns\Creational\Builder\Computer\Types;

use App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\Monitor;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\Mouse;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\Keyboard;

abstract class Computer
{
 
    protected MotherBoard $motherBoard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;

    abstract public function turnOn(): bool;
    abstract public function turnOff(): bool;
    

 

    public function setMotherBoard(MotherBoard $motherBoard): void {
        $this->motherBoard = $motherBoard;
    }

    public function setKeyboard(Keyboard $keyboard): void{
        $this->keyboard = $keyboard;
    }

    public function setMouse(Mouse $mouse): void {
        $this->mouse = $mouse;
    }

    public function setMonitor(Monitor $monitor): void {
        $this->monitor = $monitor;
    }

    public function dashboard() : string {
        return "";
    }

}