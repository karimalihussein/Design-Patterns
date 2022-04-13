<?php


namespace App\OOp\Relationship\Patterns\Creational\Builder\Computer;


class keyboard
{
    private bool $utfSupport;

    public function __construct(bool $utfSupport){
        $this->utfSupport = $utfSupport;
    }

    public function isUTFSupported() : bool{
        return $this->utfSupport;
    }
}