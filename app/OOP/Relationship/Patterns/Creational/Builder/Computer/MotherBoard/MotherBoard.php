<?php


namespace App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard;

use App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;

class MotherBoard
{
   
    private CPU $cpu;
    private RAM $ram;
    private GPU $gpu;
    private Sockets $sockets;
    private NetworkCard $networkCard;
    private Disk $disk;

    public function __construct(CPU $cpu, RAM $ram, GPU $gpu, Sockets $sockets, NetworkCard $networkCard, Disk $disk)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->sockets = $sockets;
        $this->networkCard = $networkCard;
        $this->disk = $disk;
    }


    public function getCpu(): CPU
    {
        return $this->cpu;
    }

    public function getRam(): RAM
    {
        return $this->ram;
    }

    public function getGpu(): GPU
    {
        return $this->gpu;
    }

    public function getSockets(): Sockets
    {
        return $this->sockets;
    }

    public function getNetworkCard(): NetworkCard
    {
        return $this->networkCard;
    }

    public function getDisk(): Disk
    {
        return $this->disk;
    }


    

}