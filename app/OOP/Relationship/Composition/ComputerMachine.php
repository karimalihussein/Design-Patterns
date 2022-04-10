<?php

namespace App\OOP\Relationship\Composition;


class ComputerMachine{
    

    private CPU $cpu;
    private RAM $ram;


    public function __construct(CPU $cpu, RAM $ram)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
    }

    public function dashboard() : string
    {
        return "CPU: {$this->cpu->speed} MHz, RAM: {$this->ram->size} GB";
    }
}