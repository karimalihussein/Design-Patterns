<?php

namespace App\OOP\Relationship\Composition;


class RAM{


    private int $size;

    public function __construct(int $size)
    {
        $this->size = $size;
    }
    
}