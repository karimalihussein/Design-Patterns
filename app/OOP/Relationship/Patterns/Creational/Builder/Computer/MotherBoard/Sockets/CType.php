<?php


namespace App\OOp\Relationship\Patterns\Creational\Builder\Computer\MotherBoard\Sockets;


class CType
{
    private bool $withVideoTransfer;

    public function __construct(bool $withVideoTransfer){
        $this->withVideoTransfer = $withVideoTransfer;
    }

    public function isWithVideoTransfer() : bool{
        return $this->withVideoTransfer;
    }
}