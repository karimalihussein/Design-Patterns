<?php


namespace App\OOp\Relationship\Patterns\Creational\Builder\Builders;


use App\OOp\Relationship\Patterns\Creational\Builder\Builder;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\keyboard;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Monitor;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;

use App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;

use App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\Sockets\CType;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\Sockets\USB;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Mouse;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types\Computer;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\Types\Computer\ComputerCS;
use App\OOp\Relationship\Patterns\Creational\Builder\Computer\UPS;

class ComputerXLBuilder extends Builder
{
    public function buildMotherBoard(): MotherBoard
    {
        $cpu = new CPU(2.5);
        $ram = new RAM(8);
        $gpu = new GPU(2);
        $sockets = new Sockets([
            new USB(3),
            new USB(2),

            new Ctype(true),
            new Ctype(true),
            new Ctype(true),

        ]);
        $networkCard = new NetworkCard(5);
        $disk = new Disk('SSD');
        return new MotherBoard($cpu, $ram, $gpu, $sockets, $networkCard, $disk);
        // return new MotherBoard();
    }

    public function buildKeyboard(): keyboard
    {
        return new keyboard(true);
    }

    public function buildMouse(): Mouse
    {
        return new Mouse(false);
    }

    public function buildMonitor(): Monitor
    {
        return new Monitor('1920 FHD');
    }

    public function buildCoolingSystem(): CoolingSystem
    {
        return new CoolingSystem(5);
    }

    public function buildUPS(): UPS
    {
        return new UPS(96);
    }

    public function getComputer(): Computer
    {
        $computer = new ComputerXLBuilder();
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setMotherBoard($this->buildMotherBoard());
        $computer->setMouse($this->buildMouse());
        $computer->setCs($this->buildCoolingSystem());
        return $computer;
        
    }

}