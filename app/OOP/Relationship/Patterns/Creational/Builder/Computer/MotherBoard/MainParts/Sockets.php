<?php


namespace App\OOP\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class Sockets
{
    private array $sockets;

    public function __construct(array $sockets){
        $this->sockets = $sockets ;
    }

    public function getSockets() : array{
        return $this->sockets;
    }
}